<?php

namespace App\Jobs;

use App\Sheets\CatholicPrayer;
use App\Sheets\Devotion;
use App\Sheets\OtherPrayer;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class UnpackPrayerDataJob implements ShouldQueue
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
        DB::statement('DELETE FROM Devotions');
        DB::statement('DBCC CHECKIDENT (Devotions, RESEED, 0)');

        DB::statement('DELETE FROM BasicCatholicPrayer');
        DB::statement('DBCC CHECKIDENT (BasicCatholicPrayer, RESEED, 0)');

        DB::statement('DELETE FROM OtherCatholicPrayer');
        DB::statement('DBCC CHECKIDENT (OtherCatholicPrayer, RESEED, 0)');

        Excel::load('storage/app/public/prayer.xlsx', function ($reader) {
            Log::info('Reading Excel...');

            $reader->sheet(0, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 5;

                Log::info('Starting migration...');

                while (true) {
                    if ($this->getText(CatholicPrayer::Title) == '' && $this->getText(CatholicPrayer::Content) == '')
                        break;

                    $catholicPrayer = \App\Models\CatholicPrayer::create([
                        'ImagePath' => '',
                        'Prayer' => $this->getText(CatholicPrayer::Content),
                        'Title' => $this->getText(CatholicPrayer::Title)
                    ]);

                    $catholicPrayer->save();

                    $this->row += 1;
                }
            });

            $reader->sheet(1, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 5;

                Log::info('Starting migration...');

                while (true) {
                    if ($this->getText(OtherPrayer::Title) == '' && $this->getText(OtherPrayer::Content) == '')
                        break;

                    $otherPrayer = \App\Models\OtherPrayer::create([
                        'Prayer' => $this->getText(OtherPrayer::Content),
                        'Title' => $this->getText(OtherPrayer::Title),
                        'Categories' => $this->getText(OtherPrayer::Categories),
                        'ImagePath' => $this->getText(OtherPrayer::Photos)
                    ]);

                    $otherPrayer->save();

                    $this->row += 1;
                }
            });

            $reader->sheet(3, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 5;

                Log::info('Starting migration...');

                while (true) {
                    if ($this->getText(Devotion::Title) == '' && $this->getText(Devotion::Content) == '')
                        break;

                    $devotion = \App\Models\Devotion::create([
                        'ImagePath' => '',
                        'Prayer' => $this->getText(Devotion::Content),
                        'Title' => $this->getText(Devotion::Title)
                    ]);

                    $devotion->save();

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
}
