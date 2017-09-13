<?php

namespace App\Jobs;

use App\Models\DailyReflection;
use App\Sheets\Reflection;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class UnpackReflectionDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $row;

    private $sheet;

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
        DB::statement('DELETE FROM UserDailyReflectionReflection');
        DB::statement('DBCC CHECKIDENT (UserDailyReflectionReflection, RESEED, 0)');

        DB::statement('DELETE FROM DailyReflection');
        DB::statement('DBCC CHECKIDENT (DailyReflection, RESEED, 0)');

        Excel::load('storage/app/public/reflection.xlsx', function ($reader) {
            Log::info('Reading Excel...');

            $reader->sheet(0, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 5;

                Log::info('Starting migration...');

                while (true) {
                    if ($this->getText(Reflection::FirstContentTitle) == '' && $this->getText(Reflection::FirstContent) == '')
                        break;

                    $reflection = DailyReflection::create([
                        'Source' => $this->getText(Reflection::Source),
                        'DateOfReflection' => $this->parseDate(Reflection::Date),
                        'FirstContentTitle' => $this->getText(Reflection::FirstContentTitle),
                        'FirstContent' => $this->getText(Reflection::FirstContent),
                        'SecondContentTitle' => $this->getText(Reflection::SecondContentTitle),
                        'SecondContent' => $this->getText(Reflection::SecondContent),
                        'ThirdContentTitle' => $this->getText(Reflection::ThirdContentTitle),
                        'ThirdContent' => $this->getText(Reflection::ThirdContent),
                        'FourthContentTitle' => $this->getText(Reflection::FourthContentTitle),
                        'FourthContent' => $this->getText(Reflection::FourthContent),
                        'FifthContentTitle' => $this->getText(Reflection::FifthContentTitle),
                        'FifthContent' => $this->getText(Reflection::FifthContent),
                        'SixthContentTitle' => $this->getText(Reflection::SixthContentTitle),
                        'SixthContent' => $this->getText(Reflection::SixthContent),
                        'Prayer' => $this->getText(Reflection::Prayer),
                        'CreatedBy' => null,
                        'DateCreated' => date('Y-m-d H:i:s'),
                    ]);

                    $reflection->save();

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
    }
}
