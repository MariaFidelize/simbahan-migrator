<?php

namespace App\Jobs;

use App\Models\OrgActivity;
use App\Models\OrgAttendee;
use App\Models\OrgBibleSchedule;
use App\Models\OrgLocation;
use App\Models\OrgMass;
use App\Models\OrgParking;
use App\Models\OrgPhoto;
use App\Models\OrgVentilation;
use App\Models\OrgWorshipSchedule;
use App\Sheets\Organization;
use Illuminate\Bus\Queueable;
use Illuminate\Console\Application;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Readers\LaravelExcelReader;

class UnpackOrganizationData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Worksheet selected.
     *
     * @var LaravelExcelWorksheet
     */
    private $sheet;

    private $row;

    private $organization;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Truncating data...');

        DB::statement('DELETE FROM tblOrganizationActivities');
        DB::statement('DBCC CHECKIDENT (tblOrganizationActivities, RESEED, 0)');

        DB::statement('DELETE FROM tblOrganizationAttendees');
        DB::statement('DBCC CHECKIDENT (tblOrganizationAttendees, RESEED, 0)');

        DB::statement('DELETE FROM tblBibleSchedules');
        DB::statement('DBCC CHECKIDENT (tblBibleSchedules, RESEED, 0)');

        DB::statement('DELETE FROM tblOrgLocation');
        DB::statement('DBCC CHECKIDENT (tblOrgLocation, RESEED, 0)');

        DB::statement('DELETE FROM tblMassDetails');
        DB::statement('DBCC CHECKIDENT (tblMassDetails, RESEED, 0)');

        DB::statement('DELETE FROM tblOrganizationParking');
        DB::statement('DBCC CHECKIDENT (tblOrganizationParking, RESEED, 0)');

        DB::statement('DELETE FROM tblOrganizationPhoto');
        DB::statement('DBCC CHECKIDENT (tblOrganizationPhoto, RESEED, 0)');

        DB::statement('DELETE FROM tblOrganizationVentilation');
        DB::statement('DBCC CHECKIDENT (tblOrganizationVentilation, RESEED, 0)');

        DB::statement('DELETE FROM tblWorshipSchedules');
        DB::statement('DBCC CHECKIDENT (tblWorshipSchedules, RESEED, 0)');

        DB::statement('DELETE FROM tblCatholicOrganization');
        DB::statement('DBCC CHECKIDENT (tblCatholicOrganization, RESEED, 0)');

        Log::info('Migration started...');

        Excel::load('storage/app/public/organization.xlsx', function ($reader) {

            $reader->sheet(0, function ($sheet) {
                Log::info('Starting to migrate...');

                $this->sheet = $sheet;
                $this->row = 5;

                while (true) {
                    // If the current row is empty, halt.
                    if ($this->getText(Organization::Name) == '')
                        break;

                    $organization = \App\Models\Organization::create([
                        'OrganizationName' => $this->getText(Organization::Name),
                        'About' => $this->getText(Organization::description),
                        'LastUpdate' => $this->parseDate(Organization::LastUpdate),
                        'CompleteAddress' => $this->getText(Organization::FullAddress),
                        'StreetNo' => '', //TODO: No street number column
                        'StreetName' => $this->getText(Organization::Street),
                        'Barangay' => $this->getText(Organization::Barangay),
                        'CityOrMunicipality' => $this->getText(Organization::City),
                        'StateOrProvince' => $this->getText(Organization::State),
                        'Country' => $this->getText(Organization::Country),
                        'DateEstablished' => $this->getText(Organization::DateEstablished),
                        'ParentOrganization' => $this->getText(Organization::ParentOrganization),
                        'FeastBuilderOrPreacher' => $this->getText(Organization::Preacher),
                        'BranchOrLocation' => $this->getText(Organization::Location),
                        'ContactNo' => $this->getText(Organization::ContactNumber),
                        'EmailAddress' => $this->getText(Organization::Email),
                        'Website' => $this->getText(Organization::Website),
                        'RetreatSchedule' => $this->getText(Organization::retreatSchedule),
                        'RecollectionSchedule' => $this->getText(Organization::recollectionSchedule),
                        'TalkSchedule' => $this->getText(Organization::talkSchedule),
                        'CampSchedule' => $this->getText(Organization::campSchedule),
                        'VolunteerSchedule' => $this->getText(Organization::volunteerWorkSchedule),
                        'Latitude' => $this->getText(Organization::latitude),
                        'Longitude' => $this->getText(Organization::longitude)
                    ]);

                    $this->organization = $organization;

                    $organization->save();

                    $this->createOrganizationActivities();

                    $this->createOrganizationAttendees();

                    $this->createOrganizationParking();

                    $this->createOrganizationVentilation();

                    $this->createOrganizationLocation();

                    $this->createOrganizationMass();

                    $this->createOrganizationWorshipSchedules();

                    $this->createOrganizationPhotos();

                    $this->row += 1;
                }
            });
        });

        DB::statement("DELETE FROM tblMassDetails WHERE Time = ''");
        DB::statement("DELETE FROM tblWorshipSchedules WHERE Time = ''");
        DB::statement("DELETE FROM tblBibleSchedules WHERE Time = ''");
    }

    public function createOrganizationPhotos()
    {
        $fileNames = explode(',', $this->getText(Organization::photos));

        foreach ($fileNames as $fileName) {
            OrgPhoto::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ImagePath' => $fileName
            ])->save();
        }
    }

    public function createOrganizationWorshipSchedules()
    {
        foreach (Organization::worship() as $worship) {
            if (trim($worship['schedule']) == '')
                continue;

            OrgWorshipSchedule::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'TimeStandardID' => $worship['time_standard'],
                'ScheduleID' => $worship['schedule_id'],
                'Time' => $this->getText($worship['schedule'])
            ])->save();
        }
    }

    public function createOrganizationBibleSchedules()
    {
        foreach (Organization::bibleStudies() as $bibleStudy) {
            if (trim($bibleStudy['schedule']) == '')
                continue;
            OrgBibleSchedule::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'TimeStandardID' => $bibleStudy['time_standard'],
                'ScheduleID' => $bibleStudy['schedule_id'],
                'Time' => $this->getText($bibleStudy['schedule'])
            ])->save();
        }
    }

    public function createOrganizationMass()
    {
        foreach (Organization::masses() as $mass) {
            if (trim($mass['schedule']) == '')
                continue;

            OrgMass::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'TimeStandardID' => $mass['time_standard'],
                'ScheduleID' => $mass['schedule_id'],
                'Time' => $this->getText($mass['schedule'])
            ])->save();
        }
    }

    public function createOrganizationLocation()
    {
        if ($this->getBool(Organization::InChurch)) {
            OrgLocation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'OrgLocationID' => OrgLocation::CHURCH
            ])->save();
        }

        if ($this->getBool(Organization::InSchool)) {
            OrgLocation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'OrgLocationID' => OrgLocation::SCHOOL
            ])->save();
        }

        if ($this->getBool(Organization::InPublic)) {
            OrgLocation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'OrgLocationID' => OrgLocation::PUBLIC_PLACE
            ])->save();
        }

        if ($this->getBool(Organization::InMall)) {
            OrgLocation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'OrgLocationID' => OrgLocation::MALL
            ])->save();
        }

        if ($this->getBool(Organization::InPrivate)) {
            OrgLocation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'OrgLocationID' => OrgLocation::PRIVATE_BUILDING
            ])->save();
        }
    }

    public function createOrganizationVentilation()
    {
        if ($this->getBool(Organization::HasAircon)) {
            OrgVentilation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'VentilationID' => OrgVentilation::AIRCONDITION
            ])->save();
        }

        if ($this->getBool(Organization::HasCeilingfan)) {
            OrgVentilation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'VentilationID' => OrgVentilation::CEILING_FAN
            ])->save();
        }

        if ($this->getBool(Organization::HasWallfan)) {
            OrgVentilation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'VentilationID' => OrgVentilation::WALL_FAN
            ])->save();
        }

        if ($this->getBool(Organization::HasStandFan)) {
            OrgVentilation::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'VentilationID' => OrgVentilation::STAND_FAN
            ])->save();
        }
    }

    public function createOrganizationParking()
    {
        if ($this->getBool(Organization::HasMallParking)) {
            OrgParking::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ParkingID' => OrgParking::MALL_PARKING
            ])->save();
        }

        if ($this->getBool(Organization::HasPrivateParking)) {
            OrgParking::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ParkingID' => OrgParking::PRIVATE_PARKING
            ])->save();
        }

        if ($this->getBool(Organization::HasStreetParking)) {
            OrgParking::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ParkingID' => OrgParking::STREET_PARKING
            ])->save();
        }
    }

    public function createOrganizationAttendees()
    {
        if ($this->getBool(Organization::HasMaleAttendees)) {
            OrgAttendee::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'AttendeeID' => OrgAttendee::MEN
            ])->save();
        }

        if ($this->getBool(Organization::HasSingleAttendees)) {
            OrgAttendee::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'AttendeeID' => OrgAttendee::SINGLE
            ])->save();
        }

        if ($this->getBool(Organization::HasProfessionalAttendees)) {
            OrgAttendee::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'AttendeeID' => OrgAttendee::PROFESSIONALS
            ])->save();
        }

        if ($this->getBool(Organization::HasStudentAttendees)) {
            OrgAttendee::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'AttendeeID' => OrgAttendee::STUDENTS
            ])->save();
        }

        if ($this->getBool(Organization::HasCoupleAttendees)) {
            OrgAttendee::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'AttendeeID' => OrgAttendee::COUPLES
            ])->save();
        }

        if ($this->getBool(Organization::HasWomenAttendees)) {
            OrgAttendee::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'AttendeeID' => OrgAttendee::WOMEN
            ])->save();
        }

        if ($this->getBool(Organization::HasMissionaryAttendees)) {
            OrgAttendee::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'AttendeeID' => OrgAttendee::MISSIONARIES
            ])->save();
        }

        if ($this->getBool(Organization::HasNonCatholicAttendees)) {
            OrgAttendee::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'AttendeeID' => OrgAttendee::NON_CATHOLIC
            ])->save();
        }
    }

    public function createOrganizationActivities()
    {
        if ($this->getBool(Organization::hasWorship)) {
            OrgActivity::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ActivityID' => OrgActivity::WORSHIP
            ])->save();
        }

        if ($this->getBool(Organization::hasBibleStudy)) {
            OrgActivity::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ActivityID' => OrgActivity::BIBLE_STUDY
            ])->save();
        }

        if ($this->getBool(Organization::hasMass)) {
            OrgActivity::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ActivityID' => OrgActivity::MASS
            ])->save();
        }

        if ($this->getBool(Organization::hasRetreat)) {
            OrgActivity::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ActivityID' => OrgActivity::RETREATS
            ])->save();
        }

        if ($this->getBool(Organization::hasRecollection)) {
            OrgActivity::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ActivityID' => OrgActivity::RECOLLECTION
            ])->save();
        }

        if ($this->getBool(Organization::hasVolunteerWork)) {
            OrgActivity::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ActivityID' => OrgActivity::VOLUNTEER_WORKS
            ])->save();
        }

        if ($this->getBool(Organization::hasTalks)) {
            OrgActivity::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ActivityID' => OrgActivity::TALKS
            ])->save();
        }

        if ($this->getBool(Organization::hasCamps)) {
            OrgActivity::create([
                'OrganizationID' => $this->organization->OrganizationID,
                'ActivityID' => OrgActivity::CAMPS
            ])->save();
        }
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
