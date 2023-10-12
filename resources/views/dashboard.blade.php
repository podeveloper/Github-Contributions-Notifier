<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="w-full text-lg">
                            <thead>
                            <tr>
                                <th class="px-6 py-4 mx-4 bg-gray-100 text-left text-base leading-6 font-medium text-gray-600 uppercase tracking-wider">GitHub Page Link</th>
                                <th class="px-6 py-4 mx-4 bg-gray-100 text-left text-base leading-6 font-medium text-gray-600 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-4 mx-4 bg-gray-100 text-left text-base leading-6 font-medium text-gray-600 uppercase tracking-wider">Preferred Time</th>
                                <th class="px-6 py-4 mx-4 bg-gray-100 text-left text-base leading-6 font-medium text-gray-600 uppercase tracking-wider">Timezone by Country</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @if($githubContributionNotification)
                            <tr>
                                <td class="px-6 py-4 mx-4 whitespace-no-wrap leading-5 font-medium text-gray-900">{{ $githubContributionNotification->profile_link }}</td>
                                <td class="px-6 py-4 mx-4 whitespace-no-wrap text-gray-500">{{ $githubContributionNotification->email }}</td>
                                <td class="px-6 py-4 mx-4 whitespace-no-wrap text-gray-500">{{ $githubContributionNotification->preferred_time }}</td>
                                <td class="px-6 py-4 mx-4 whitespace-no-wrap text-gray-500">{{ $githubContributionNotification->timezone }}</td>
                            </tr>
                            @else
                                <tr>
                                    <td class="px-6 py-4 mx-4 whitespace-no-wrap leading-5 font-medium text-gray-900">Please fill the form.</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        @if($githubContributionNotification)
                            <div class="bg-gray-500 w-full p-2 text-white border px-4 py-3 rounded relative" role="alert">
                                Congratulations! You will receive email according to your settings.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
