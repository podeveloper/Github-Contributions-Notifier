<?php

namespace Database\Seeders;

use App\Models\GithubContributionNotification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GithubContributionNotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GithubContributionNotification::create([
            'profile_link' => 'https://github.com/podeveloper',
            'email' => 'yasinkorkmaz.dev@gmail.com',
            'preferred_time' => '14:00:00',
            'timezone' => 'Istanbul/Europe',
        ]);
    }
}
