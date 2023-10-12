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
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-4" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('notifications.save') }}" class="mt-4">
                        @csrf

                        <div class="mb-4">
                            <label for="profile_link" class="block text-gray-700 text-sm font-bold mb-2">GitHub Page Link</label>
                            <input type="text" name="profile_link" id="profile_link" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('profile_link') ?? ''}}" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('email') ?? ''}}" required>
                        </div>

                        <div class="mb-4">
                            <label for="preferred_time" class="block text-gray-700 text-sm font-bold mb-2">Preferred Time</label>
                            <input type="time" name="preferred_time" id="preferred_time" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{old('preferred_time') ?? ''}}" required>
                        </div>

                        <div class="mb-4">
                            <label for="timezone" class="block text-gray-700 text-sm font-bold mb-2">Timezone by Country</label>
                            <select name="timezone" id="timezone" class="block appearance-none w-full bg-white border border-gray-400 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{old('timezone') ?? ''}}" required>
                                <option value="America/New_York">America/New York</option>
                                <option value="America/Los_Angeles">America/Los Angeles</option>
                                <option value="Istanbul/Europe">Istanbul/Europe</option>
                            </select>
                        </div>

                        <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
