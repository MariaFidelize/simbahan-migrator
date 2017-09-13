<?php

namespace App\Jobs;

use App\Models\Adoration;
use App\Models\AdorationChapel;
use App\Models\AdorationChapelPhoto;
use App\Models\AdorationVentilation;
use App\Models\BaptismDetail;
use App\Models\ChurchPhoto;
use App\Models\ChurchType;
use App\Models\ConfessionDetail;
use App\Models\Location;
use App\Models\MassDetail;
use App\Models\Parking;
use App\Models\Schedule;
use App\Models\Simbahan;
use App\Models\SimbahanMass;
use App\Models\SimbahanParking;
use App\Models\SimbahanVentilation;
use App\Models\Ventilation;
use App\Models\WeddingDetail;
use App\Sheets\CityOfManila;
use App\Sheets\Master;
use App\Simbahan\Photos;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Classes\LaravelExcelWorksheet;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Readers\LaravelExcelReader;
use DB;

class UnpackSimbahanDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Worksheet selected.
     *
     * @var LaravelExcelWorksheet
     */
    private $sheet;

    private $row;

    private $fileName;

    /**
     * Create a new job instance.
     *
     * @param string $fileName
     * @return void
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Job Started.');

        Excel::load('storage/app/public/'.$this->fileName.'.xlsx', function (LaravelExcelReader $reader) {
            Log::info('Reading Excel...');

            $reader->sheet(0, function (LaravelExcelWorksheet $sheet) {
                Log::info('Starting to migrate...');

                $this->sheet = $sheet;
                $this->row = 1;

                while (true) {
                    // If the current row is empty, halt.
                    if ($this->getText(Master::churchNameColumn) == '')
                        break;

                    preg_match("~^(\d+)~", $this->getText(Master::streetColumn), $streetNumbers);

                    $location = new \App\Simbahan\Location();

                    $location->setIsStandalone($this->getBool(Master::standaloneColumn))
                             ->setIsInMall($this->getBool(Master::mallsColumn))
                             ->setIsInSchool($this->getBool(Master::schoolsColumn))
                             ->setIsInHospital($this->getBool(Master::hospitalsColumn));

                    if ($this->getText(Master::latitudeColumn) == 'No data available')
                        $latitude = 0;
                    else if ($this->getText(Master::latitudeColumn) != "")
                        $latitude = trim($this->getText(Master::latitudeColumn));
                    else
                        $latitude = 0;

                    if ($this->getText(Master::longitudeColumn) == 'No data available')
                        $longitude = 0;
                    else if ($this->getText(Master::longitudeColumn) != "")
                        $longitude = trim($this->getText(Master::longitudeColumn));
                    else
                        $longitude = 0;

                    // Create Simbahan instance.
                    $simbahan = Simbahan::create([
                        'ChurchCode' => $this->getText(Master::churchCodeColumn),
                        'StreetNo' => (count($streetNumbers) > 0) ? $streetNumbers[0] : null,
                        'StreetName' => $this->getText(Master::streetColumn),
                        'Barangay' => $this->getText(Master::blockColumn),
                        'City' => $this->getText(Master::townColumn),
                        'StateOrProvince' => $this->getText(Master::stateColumn),
                        'ZipCode' => null,
                        'CompleteAddress' => $this->getText(Master::streetColumn) . ', ' . $this->getText(Master::blockColumn) . ' ' . $this->getText(Master::townColumn),
                        'Parish' => $this->getText(Master::churchNameColumn),
                        'Diocese' => $this->getText(Master::dioceseColumn),
                        'ParishPriest' => $this->getText(Master::priestColumn),
                        'Vicariate' => $this->getText(Master::vicariateColumn),
                        'DateEstablished' => $this->getText(Master::dateEstablishedColumn),
                        'DateCreated' => date('Y-m-d'),
                        'LastUpdate' => $this->parseDate(Master::lastUpdatedColumn),
                        'HasAdorationChapel' => $this->getBool(Master::withAdorationColumn),
                        'FeastDay' => $this->getText(Master::feastDayColumn),
                        'ContactNo' => $this->getText(Master::contactColumn),
                        'Latitude' => $latitude,
                        'Longitude' => $longitude,
                        'ChurchHistory' => $this->getText(Master::churchHistoryColumn),
                        'OfficeHours' => $this->getText(Master::officeHoursColumn),
                        'Website' => $this->getText(Master::websiteColumn),
                        'ChurchTypeID' => ChurchType::parseString($this->getText(Master::churchTypeColumn)),
                        'LocationID' => $location->getValue(),
                        'DevotionSchedule' => $this->getText(Master::devotionColumn)
                    ]);

                    $simbahan->save();

                    $parkings = new \App\Simbahan\Parking();

                    $parkings->setHasMallParking($this->getBool(Master::mallParkingColumn))
                             ->setHasPrivateParking($this->getBool(Master::privateChurchParkingColumn))
                             ->setHasStreetParking($this->getBool(Master::streetColumn))
                             ->setOtherParking($this->getBool(Master::otherParkingColumn));

                    foreach ($parkings->getValue() as $parking)
                    {
                        SimbahanParking::create([
                            'ParkingID' => $parking,
                            'SimbahanID' => $simbahan->SimbahanID
                        ])->save();
                    }

                    $ventilations = new \App\Simbahan\Ventilation();

                    $ventilations->setHasAirconditioned($this->getBool(Master::airConditionedColumn))
                                 ->setHasCeilingFan($this->getBool(Master::ceilingFanColumn))
                                 ->setHasOrdinaryFan($this->getBool(Master::ordinaryFanColumn));

                    foreach ($ventilations->getValue() as $ventilation)
                    {
                        SimbahanVentilation::create([
                            'VentID' => $ventilation,
                            'SimbahanID' => $simbahan->SimbahanID
                        ])->save();
                    }

                    $baptism = BaptismDetail::create([
                        'SimbahanID' => $simbahan->SimbahanID,
                        'Text' => $this->getText(Master::baptismScheduleColumn),
                        'DateCreated' => Carbon::now()
                    ]);

                    $baptism->save();

                    $wedding = WeddingDetail::create([
                        'SimbahanID' => $simbahan->SimbahanID,
                        'Text' => $this->getText(Master::weddingScheduleColumn),
                        'DateCreated' => Carbon::now()
                    ]);

                    $wedding->save();

                    $adorationVentilations = new \App\Simbahan\Ventilation();

                    $adorationVentilations->setHasAirconditioned($this->getBool(Master::AdorationHasAirConditionedColumn))
                                          ->setHasOrdinaryFan($this->getBool(Master::AdorationHasElectricFanColumn));

                    $adoration = Adoration::create([
                        'SimbahanID' => $simbahan->SimbahanID,
                        'isOpen24By7' => $this->getBool(Master::isAdoration24HoursColumn),
                        'DisplayText' => $this->getText(Master::adorationChapelScheduleColumn)
                    ]);

                    $adoration->save();

                    foreach ($adorationVentilations->getValue() as $adorationVentilation)
                    {
                        $adoVent = AdorationVentilation::create([
                            'AdorationID' => $adoration->AdorationID,
                            'VentID' => $adorationVentilation
                        ]);

                        $adoVent->save();
                    }

                    foreach (Master::adorations() as $adorationx)
                    {
                        $timeDuration = $this->getText($adorationx['schedule']);

                        if (empty($timeDuration) || $timeDuration == '')
                            continue;

//                        $matchCount = preg_match('/^0?\.[0-9]+$/', $timeDuration, $matches);

                        if ($this->timeIsDecimal($timeDuration)) {
                            $timeDuration = $this->parseTime($adorationx['schedule']);
                        }

                        $adorationChapel = AdorationChapel::create([
                            'AdorationID' => $adoration->AdorationID,
                            'ScheduleID' => $adorationx['schedule_id'],
                            'Time' => $timeDuration,
                            'TimeStandardID' => $adorationx['time_standard']
                        ]);

                        $adorationChapel->save();
                    }

                    $photos = new Photos($simbahan->ChurchCode);

                    foreach ($photos->forChurch() as $photo)
                    {
                        $churchPhoto = ChurchPhoto::create([
                            'SimbahanID' => $simbahan->SimbahanID,
                            'ImagePath' => $photo
                        ]);

                        $churchPhoto->save();
                    }

                    foreach ($photos->forAdoration() as $photo)
                    {
                        $adorationPhoto = AdorationChapelPhoto::create([
                            'AdorationID' => $adoration->AdorationID,
                            'SimbahanID' => $simbahan->SimbahanID,
                            'ImagePath' => $photo
                        ]);

                        $adorationPhoto->save();
                    }


                    foreach (Master::confessions() as $confession)
                    {
                        $timeDuration = $this->getText($confession['schedule']);

                        if (empty($timeDuration) || $timeDuration == '')
                            continue;

//                        $matchCount = preg_match('/^0?\.[0-9]+$/', $timeDuration, $matches);

                        if ($this->timeIsDecimal($timeDuration)) {
                            $timeDuration = $this->parseTime($confession['schedule']);
                        }

                        $confessionDetail = ConfessionDetail::create([
                            'SimbahanID' => $simbahan->SimbahanID,
                            'ScheduleID' => $confession['schedule_id'],
                            'TimeStandardID' => $confession['time_standard'],
                            'DateCreated' => Carbon::now(),
                            'Time' => $timeDuration,
                            'Text' => $this->getText(Master::confessionScheduleDisplayColumn)
                        ]);

                        $confessionDetail->save();
                    }

                    foreach (Master::schedules() as $mass)
                    {
                        $timeDuration = $this->getText($mass['schedule']);

                        if (empty($timeDuration) || $timeDuration == '') {
                            continue;
                        }

                        if ($this->timeIsDecimal($timeDuration))
                            $timeDuration = $this->parseTime($mass['schedule']);

                        $massDetail = MassDetail::create([
                            'SimbahanID' => $simbahan->SimbahanID,
                            'ScheduleID' => $mass['schedule_id'],
                            'TimeStandardID' => $mass['time_standard'],
                            'Language' => $this->getText($mass['language']) == 'Filipino' ? 'Tagalog' : $this->getText($mass['language']),
                            'DateCreated' => Carbon::now(),
                            'Time' => $timeDuration
                        ]);

                        $massDetail->save();
                    }

                    $this->row += 1;
                }
            });
        });

        DB::statement("UPDATE [MassDetails] SET [Time] = REPLACE(Time, ',', ';')");

        Log::info('Migration success.');
    }

    private function getText($column)
    {
        return trim($this->sheet->getCell($column . $this->row));
    }

    private function getBool($column)
    {
        return $this->getText($column) == 'Yes';
    }

    private function getInt($column)
    {
        return (int)$this->getText($column);
    }

    private function parseDate($column)
    {
        return date('Y-m-d', \PHPExcel_Shared_Date::ExcelToPHP($this->sheet->getCell($column . $this->row)->getValue()));
    }

    private function parseTime($time)
    {
        return date('h:i A', \PHPExcel_Shared_Date::ExcelToPHP($this->sheet->getCell($time . $this->row)->getValue()));
    }

    private function timeIsDecimal($time)
    {
        return substr($time, 0, 2) === "0.";
    }
}
