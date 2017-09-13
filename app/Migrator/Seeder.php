<?php

namespace App\Migrator;


use App\Jobs\UnpackSimbahanDataJob;
use App\Models\AdorationChapel;
use App\Models\Location;
use App\Models\MassDetail;
use App\Models\Parking;
use App\Models\Schedule;
use App\Models\Simbahan;
use App\Models\SimbahanMass;
use App\Models\Ventilation;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class Seeder
{
    use DispatchesJobs;

    /**
     * Uploaded Excel File that includes the data.
     *
     * @var UploadedFile
     */
    public $excelFile;

    /**
     * Seeder constructor.
     *
     * @param UploadedFile $excelFile
     */
    public function __construct(UploadedFile $excelFile)
    {
        $this->excelFile = $excelFile;
    }

    public function handle() {
        $fileName = rand(0, 99999999);
        // Move the file to the storage.
        $this->excelFile->move(storage_path('app/public'), $fileName . '.xlsx');

        // Do something with the data.
        $this->dispatch(new UnpackSimbahanDataJob($fileName));
    }
}