<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Hi {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="px-4 py-4 sm:px-6 sm:py-6 lg:px-8 lg:py-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">Editing Movies</h1>
                            <p class="mt-2 text-sm text-gray-700">Here you have the possibility to modify the information
                                of your film, series</p>
                            <x-movie-form :movie="$movie" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
