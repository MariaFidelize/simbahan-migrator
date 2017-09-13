<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;

class TruncateDatabaseJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
        DB::statement('DELETE FROM AdorationChapel');
        DB::statement('DBCC CHECKIDENT (AdorationChapel, RESEED, 0)');

        DB::statement('DELETE FROM AdorationChapelPhotos');
        DB::statement('DBCC CHECKIDENT (AdorationChapelPhotos, RESEED, 0)');

        DB::statement('DELETE FROM AdoVent3rdTable');
        DB::statement('DBCC CHECKIDENT (AdoVent3rdTable, RESEED, 0)');

        DB::statement('DELETE FROM Adorations');
        DB::statement('DBCC CHECKIDENT (Adorations, RESEED, 0)');

        DB::statement('DELETE FROM Announcements');
        DB::statement('DBCC CHECKIDENT (Announcements, RESEED, 0)');

        DB::statement('DELETE FROM BaptismDetails');
        DB::statement('DBCC CHECKIDENT (BaptismDetails, RESEED, 0)');

        DB::statement('DELETE FROM ChurchPhotos');
        DB::statement('DBCC CHECKIDENT (ChurchPhotos, RESEED, 0)');

        DB::statement('DELETE FROM ChurchReactionTable');
        DB::statement('DBCC CHECKIDENT (ChurchReactionTable, RESEED, 0)');

        DB::statement('DELETE FROM ChurchReview');
        DB::statement('DBCC CHECKIDENT (ChurchReview, RESEED, 0)');

        DB::statement('DELETE FROM ConfessionDetails');
        DB::statement('DBCC CHECKIDENT (ConfessionDetails, RESEED, 0)');

        DB::statement('DELETE FROM MassDetails');
        DB::statement('DBCC CHECKIDENT (MassDetails, RESEED, 0)');

        DB::statement('DELETE FROM SimbahanCountry');
        DB::statement('DBCC CHECKIDENT (SimbahanCountry, RESEED, 0)');

        DB::statement('DELETE FROM SimbahanParking');
        DB::statement('DBCC CHECKIDENT (SimbahanParking, RESEED, 0)');

        DB::statement('DELETE FROM SimbahanVentilation');
        DB::statement('DBCC CHECKIDENT (SimbahanVentilation, RESEED, 0)');

//        DB::statement('DELETE FROM Songs');
//        DB::statement('DBCC CHECKIDENT (Songs, RESEED, 0)');

        DB::statement('DELETE FROM WeddingDetails');
        DB::statement('DBCC CHECKIDENT (WeddingDetails, RESEED, 0)');

        DB::statement('DELETE FROM failed_jobs');
        DB::statement('DBCC CHECKIDENT (failed_jobs, RESEED, 0)');

        DB::statement('DELETE FROM jobs');
        DB::statement('DBCC CHECKIDENT (jobs, RESEED, 0)');

        DB::statement('DELETE FROM FavoriteChurch');
        DB::statement('DBCC CHECKIDENT (FavoriteChurch, RESEED, 0)');

        DB::statement('DELETE FROM FavoriteBibleVerse');
        DB::statement('DBCC CHECKIDENT (FavoriteBibleVerse, RESEED, 0)');

        DB::statement('DELETE FROM FavoriteReligiousQuote');
        DB::statement('DBCC CHECKIDENT (FavoriteReligiousQuote, RESEED, 0)');

        DB::statement('DELETE FROM FavoriteInspirationalMusic');
        DB::statement('DBCC CHECKIDENT (FavoriteInspirationalMusic, RESEED, 0)');

        DB::statement('DELETE FROM UserDailyGospelReflection');
        DB::statement('DBCC CHECKIDENT (UserDailyGospelReflection, RESEED, 0)');

        DB::statement('DELETE FROM UserDailyReflectionReflection');
        DB::statement('DBCC CHECKIDENT (UserDailyReflectionReflection, RESEED, 0)');

        DB::statement('DELETE FROM Notification_User');
        DB::statement('DBCC CHECKIDENT (Notification_User, RESEED, 0)');

        DB::statement('DELETE FROM VisitaIglesia');
        DB::statement('DBCC CHECKIDENT (VisitaIglesia, RESEED, 0)');

        DB::statement('DELETE FROM Simbahan');
        DB::statement('DBCC CHECKIDENT (Simbahan, RESEED, 0)');

        DB::statement('DELETE FROM Registration');
        DB::statement('DBCC CHECKIDENT (Registration, RESEED, 0)');
    }
}
