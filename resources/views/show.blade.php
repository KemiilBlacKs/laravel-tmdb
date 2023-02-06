@extends('layouts.main')

@section('content')
    <div class="movie-info">
        <!-- movie-info -->
        <div class="container flex flex-col px-4 py-16 mx-auto md:flex-row">
            <img src="{{ env('TMDB_API_IMAGE_URL') }}.{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}"
                class="w-full h-full rounded-lg lg:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold"> {{ $movie['title'] }} </h2>
                <div class="flex items-center mt-2 text-sm text-gray-400">
                    <span><svg class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                            <g data-name="Layer 2">
                                <path
                                    d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                    data-name="star" />
                            </g>
                        </svg></span>
                    <span class="ml-1"> {{ $movie['vote_average'] * 10 }}% </span>
                    <span class="mx-2"> | </span>
                    <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $movie['release_date'])->format('d F Y') }}</span>
                    <span class="mx-2"> | </span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{ $genre['name'] }} @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </span>
                </div>

                <p class="mt-8 text-gray-300">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="font-semibold text-white">
                        Featured Crew
                    </h4>
                    <div class="flex flex-wrap">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 3)
                                <div class="mt-4 mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400"> {{ $crew['job'] }} </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>

                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a href="https://www.youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
                            class="flex inline-flex items-center justify-center px-5 py-3 text-sm font-semibold text-white transition-colors duration-300 transform bg-red-500 rounded hover:bg-red-600"
                            target="_blanc">
                            <svg class="w-6 fill-current" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 5v14l11-7z" />
                            </svg>
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div> <!-- end movie-info -->

    <div class="movie-cast">
        <!-- movie-cast -->
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">

                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <img src="{{ env('TMDB_API_IMAGE_URL') . $cast['profile_path'] }}" alt="{{ $cast['name'] }}"
                                class="transition duration-150 ease-in-out rounded-lg hover:opacity-75">

                            <div class="mt-2">
                                <span href="#" class="mt-2 text-md hover:text-gray-300">
                                    {{ $cast['name'] }}
                                </span>
                            </div>
                            <div class="flex items-center text-sm text-gray-400">

                                <span> {{ $cast['character'] }} </span>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div> <!-- end movie-cast -->

    <div class="movie-images">
        <!-- movie-images -->
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">

                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 10)
                        <div class="mt-8">
                            <img src="{{ env('TMDB_API_IMAGE_URL') . $image['file_path'] }}" alt="{{ $movie['title'] }}"
                                class="transition duration-150 ease-in-out rounded-lg hover:opacity-75">

                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div> <!-- end movie-images -->
@endsection
