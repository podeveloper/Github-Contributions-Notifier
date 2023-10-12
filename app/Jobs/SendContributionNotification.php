<?php

namespace App\Jobs;

use App\Mail\ContributionNotificationEmail;
use App\Models\GithubContributionNotification;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class SendContributionNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $notificationId;

    public function __construct($notificationId)
    {
        $this->notificationId = $notificationId;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $notification = GithubContributionNotification::find($this->notificationId); // Retrieve the notification by ID
        if ($this->checkContributions($notification)) {
            Mail::to($notification->email)->send(new ContributionNotificationEmail());
        }
    }

    public function checkContributions($notification)
    {
        $response = Http::get($notification->profile_link);

        if ($response->successful()) {
            $content = $response->body();
            $today = Carbon::today()->format('Y-m-d');

            // If there is no contribution today return true
            return str_contains($content,'class="ContributionCalendar-day" data-date="'.$today.'" data-level="0"');
        }
    }
}
