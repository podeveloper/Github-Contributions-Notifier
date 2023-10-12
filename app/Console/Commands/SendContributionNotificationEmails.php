<?php

namespace App\Console\Commands;

use App\Jobs\SendContributionNotification;
use App\Models\GithubContributionNotification;
use Illuminate\Console\Command;

class SendContributionNotificationEmails extends Command
{
    protected $signature = 'send:contribution-notifications';

    protected $description = 'Send contribution notification emails';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $notifications = GithubContributionNotification::get(['id']);

        foreach ($notifications as $notification) {
            SendContributionNotification::dispatch($notification->id);
        }

        $this->info('Contribution notification emails have been queued.')   ;
    }
}
