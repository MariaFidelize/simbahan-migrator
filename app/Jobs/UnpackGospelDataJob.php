<?php

namespace App\Jobs;

use App\Models\DailyGospel;
use App\Sheets\Gospel;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class UnpackGospelDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $sheet;

    private $row;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        DB::statement('DELETE FROM UserDailyGospelReflection');
        DB::statement('DBCC CHECKIDENT (UserDailyGospelReflection, RESEED, 0)');
        DB::statement('DELETE FROM DailyGospel');
        DB::statement('DBCC CHECKIDENT (DailyGospel, RESEED, 0)');

        Excel::load('storage/app/public/gospel.xlsx', function ($reader) {
            Log::info('Reading Excel...');

            $reader->sheet(0, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 3;

                Log::info('Starting migration...');

                while (true) {
                    if ($this->getText(Gospel::FirstReading) == '' && $this->getText(Gospel::GospelContent) == '')
                        break;

                    $gospel = DailyGospel::create([
                        'DateOfGospel' => $this->parseDate(Gospel::Date),
                        'FirstReadingTitle' => $this->getText(Gospel::FirstReading),
                        'FirstReadingContent' => $this->getText(Gospel::FirstReadingContent),
                        'ResponsorialPsalmTitle' => $this->getText(Gospel::PsalmTitle),
                        'ResponsorialPsalmContent' => $this->getText(Gospel::PsalmContent),
                        'SecondReadingTitle' => $this->getText(Gospel::SecondReading),
                        'SecondReadingContent' => $this->getText(Gospel::SecondReadingContent),
                        'GospelTitle' => $this->getText(Gospel::GospelTitle),
                        'GospelContent' => $this->getText(Gospel::GospelContent),
                        'CreatedBy' => '',
                        'DateCreated' => date('Y-m-d H:i:s')
                    ]);

                    $gospel->save();

                    $this->row += 1;
                }
            });
        });

        Log::info('Migration done.');
    }

    private function getText($column)
    {
        return $this->sheet->getCell($column . $this->row);
    }

    private function parseDate($column)
    {
        return date('Y-m-d', \PHPExcel_Shared_Date::ExcelToPHP($this->getText($column)->getValue()));
        //$carbon = Carbon::parse();

        //return $carbon->format('m/d/Y');
    }
}
