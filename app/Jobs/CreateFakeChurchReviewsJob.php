<?php

namespace App\Jobs;

use App\Models\ChurchReaction;
use App\Models\ChurchReview;
use App\Models\Simbahan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateFakeChurchReviewsJob implements ShouldQueue
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
        $faker = \Faker\Factory::create();

        factory(User::class, 20)->create();

        foreach (Simbahan::all() as $simbahan)
        {
            foreach (User::all() as $user)
            {
               ChurchReview::create([
                   'Username' => $user->Username,
                   'StarCount' => $faker->randomElement([0, 1, 2, 3, 4, 5]),
                   'SimbahanID' => $simbahan->SimbahanID,
                   'Comment' => $faker->sentences(5, true)
               ])->save();
            }
        }

        foreach (User::all() as $user)
        {
            foreach (ChurchReview::all() as $review)
            {
                ChurchReaction::create([
                    'ChurchReviewID' => $review->ChurchReviewID,
                    'ReactionID' => $faker->randomElement([1, 2]),
                    'Username' => $user->Username,
                    'DateCreated' => Carbon::now()
                ])->save();
            }
        }
    }
}
