<?php

namespace App\Jobs;

use App\Sheets\Saint;
use App\Simbahan\SaintPhoto;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class UnpackSaintDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $sheet;

    private $row;

    private $saintPhoto;

    /**
     * Create a new job instance.
     *
     * @param SaintPhoto $saintPhoto
     * @return void
     */
    public function __construct(SaintPhoto $saintPhoto)
    {
        $this->saintPhoto = $saintPhoto;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        DB::statement('DELETE FROM Saints');
        DB::statement('DBCC CHECKIDENT (Saints, RESEED, 0)');

        Excel::load('storage/app/public/saints.xlsx', function ($reader) {
            Log::info('Reading Excel...');

            $reader->sheet(0, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 5;

                Log::info('Starting migration...');

                while (true) {
                    if ($this->getText(Saint::FeastDay) == '' && $this->getText(Saint::Name) == '')
                        break;

                    $saint = \App\Models\Saint::create([
                        'Name' => $this->getText(Saint::Name),
                        'Biography' => $this->getText(Saint::Biography),
                        'ImagePath' => $this->saintPhoto->getImage($this->getText(Saint::Number)),
                        'FeastDay' => $this->getText(Saint::FeastDay),
                        'BirthDate' => $this->getText(Saint::BirthDate),
                        'DeathDate' => $this->getText(Saint::DeathDate),
                        'Patron' => $this->getText(Saint::Patron),
                        'CanonizeDate' => $this->getText(Saint::Canonization),
                        'RelatedChurch' => $this->getText(Saint::RelatedChurches),
                        'PublicationDate' => $this->getText(Saint::PublicationDate),
                        'Categories' => $this->getText(Saint::Categories)
                    ]);

                    $saint->save();

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
