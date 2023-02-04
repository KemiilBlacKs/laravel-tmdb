@extends('layouts.main')

@section('content')
    <div class="container px-4 pt-6 mx-auto">
        <div class="popular-movies">
            <h2 class="font-semibold tracking-wider text-red-500 uppercase">Trending Day</h2>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                <div class="mt-8">
                    <a href="">
                        <img src="{{ env('TMDB_API_IMAGE_URL') }}/ngl2FKBlU4fhbdsrtdom9LVLBXw.jpg" alt="parasite"
                            class="transition duration-150 ease-in-out rounded-lg hover:opacity-75">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">
                            Ant-Man
                        </a>
                        <div class="flex items-center text-sm text-gray-400">
                            <span><svg class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                                    <g data-name="Layer 2">
                                        <path
                                            d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                            data-name="star" />
                                    </g>
                                </svg></span>
                            <span class="ml-1"> 85% </span>
                            <span class="mx-2"> | </span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action, Comedy, Science Fiction
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
