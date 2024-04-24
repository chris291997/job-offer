<?php

namespace App\Listeners;

use App\Events\JobPosted;
use App\Mail\JobPostedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyJobBoardModerator implements ShouldQueue
{
    public function handle(JobPosted $event)
    {
        $job = $event->job;

        // Send email notification
        Mail::to('moderator@example.com')->send(new JobPostedNotification($job));
    }
}