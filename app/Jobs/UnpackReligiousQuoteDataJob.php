<?php


namespace App\Jobs;

use App\Sheets\BibleVerse;
use App\Sheets\InspirationalMusic;
use App\Sheets\ReligiousQuote;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class UnpackReligiousQuoteDataJob implements ShouldQueue
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
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Job Started.');

        DB::statement('DELETE FROM FavoriteBibleVerse');
        DB::statement('DBCC CHECKIDENT (FavoriteBibleVerse, RESEED, 0)');

        DB::statement('DELETE FROM FavoriteReligiousQuote');
        DB::statement('DBCC CHECKIDENT (FavoriteReligiousQuote, RESEED, 0)');

        DB::statement('DELETE FROM ReligiousQuote');
        DB::statement('DBCC CHECKIDENT (ReligiousQuote, RESEED, 0)');

        DB::statement('DELETE FROM BibleVerse');
        DB::statement('DBCC CHECKIDENT (BibleVerse, RESEED, 0)');

        DB::statement('DELETE FROM FavoriteInspirationalMusic');
        DB::statement('DBCC CHECKIDENT (FavoriteInspirationalMusic, RESEED, 0)');

        DB::statement('DELETE FROM InspirationalMusic');
        DB::statement('DBCC CHECKIDENT (InspirationalMusic, RESEED, 0)');

        Log::info('Date has been reset.');

        Excel::load('storage/app/public/religious_quote.xlsx', function ($reader) {
            Log::info('Reading Excel...');

            $reader->sheet(0, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 5;

                Log::info('Starting religious quote migration...');

                while (true) {
                    if ($this->getText(ReligiousQuote::Quote) == '' && $this->getText(ReligiousQuote::Author) == '')
                        break;

                    $religiousQuote = \App\Models\ReligiousQuote::create([
                        'DateOfQuote' => $this->parseDate(ReligiousQuote::Date),
                        'RQCode' => $this->getText(ReligiousQuote::Number),
                        'EmotionsReactions' => $this->getText(ReligiousQuote::Emotion),
                        'Author' => $this->getText(ReligiousQuote::Author),
                        'Quote' => $this->getText(ReligiousQuote::Quote),
                        'DisplayListForMobile' => $this->getText(ReligiousQuote::DisplayList)
                    ]);

                    $religiousQuote->save();

                    $this->row += 1;
                }
            });

            $reader->sheet(1, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 5;

                Log::info('Starting bible verses migration...');

                while (true) {
                    if ($this->getText(BibleVerse::Title) == '' && $this->getText(BibleVerse::Content) == '')
                        break;

                    $bibleVerse = \App\Models\BibleVerse::create([
                        'DateOfVerse' => $this->parseDate(BibleVerse::Date),
                        'BVCode' => $this->getText(BibleVerse::Number),
                        'EmotionsReactions' => $this->getText(BibleVerse::Emotion),
                        'ChapterTitle' => $this->getText(BibleVerse::Title),
                        'BibleVerseContent' => $this->getText(BibleVerse::Content)
                    ]);

                    $bibleVerse->save();

                    $this->row += 1;
                }
            });

            $reader->sheet(2, function ($sheet) {
                $this->sheet = $sheet;
                $this->row = 5;

                Log::info('Starting inspirational music migration...');

                while (true) {
                    if ($this->getText(InspirationalMusic::SongTitle) == '' && $this->getText(InspirationalMusic::Artist) == '')
                        break;

                    $inspirationMusic = \App\Models\InspirationalMusic::create([
                        'IMCode' => $this->getText(InspirationalMusic::Number),
                        'EmotionsReactions' => $this->getText(InspirationalMusic::Emotion),
                        'Artist' => $this->getText(InspirationalMusic::Artist),
                        'SongTitle' => $this->getText(InspirationalMusic::SongTitle),
                        'Album' => $this->getText(InspirationalMusic::Album),
                        'AlbumCover' => '',
                        'Source' => $this->getText(InspirationalMusic::Source),
                        'FilePath' => $this->getText(InspirationalMusic::Path),
                        'Lyrics' => $this->getText(InspirationalMusic::Lyrics)
                    ]);

                    $inspirationMusic->save();

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
