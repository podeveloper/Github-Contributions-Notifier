<?php

namespace App\Http\Controllers;

use App\Models\GithubContributionNotification;
use Illuminate\Http\Request;

class GithubContributionNotificationController extends Controller
{

    public function show()
    {
        $githubContributionNotification = GithubContributionNotification::where('email',auth()->user()->email)->first();
        return view('dashboard',compact('githubContributionNotification'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'profile_link' => 'required|url',
            'email' => 'required|email',
            'preferred_time' => 'required|date_format:H:i',
            'timezone' => 'required',
        ]);

        $githubContributionNotification = new GithubContributionNotification([
            'profile_link' => $request->input('profile_link'),
            'email' => $request->input('email'),
            'preferred_time' => $request->input('preferred_time'),
            'timezone' => $request->input('timezone'),
        ]);
        $githubContributionNotification->save();

        return redirect()->route('dashboard')->with('success', 'Your data have been saved.');
    }
}
