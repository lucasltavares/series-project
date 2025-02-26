<?php

namespace App\Listeners;

use App\Models\User;
use App\Mail\SeriesCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailUsersAboutSeriesCreated implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(\App\Events\SeriesCreated $event)
    {
        $users = User::all();

        foreach ($users as $index => $user) {
            $email = new SeriesCreated(
                $user->email,
                $event->seriesName,
                $event->seriesId,
                $event->seasonsQty,
                $event->episodesPerSeason
            );

            $schedule = now()->addSeconds($index * 5); 

            Mail::to($user)->later($schedule, $email); // send, queue or later.
        }
    }
}
