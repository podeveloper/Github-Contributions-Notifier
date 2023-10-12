@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">GitHub Contribution Notification Details</div>

                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th scope="row">GitHub Page Link</th>
                                <td>{{ $githubContributionNotification->profile_link }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>{{ $githubContributionNotification->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Preferred Time</th>
                                <td>{{ $githubContributionNotification->preferred_time }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Timezone by Country</th>
                                <td>{{ $githubContributionNotification->timezone }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
