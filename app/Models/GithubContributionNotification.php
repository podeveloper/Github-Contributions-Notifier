<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GithubContributionNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_link',
        'email',
        'preferred_time',
        'timezone',
    ];
}
