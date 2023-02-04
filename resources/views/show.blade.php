@extends('layouts.main')

@section('content')
    <div class="border-b border-gray-800 movie-info">
        <!-- movie-info -->
        <div class="container flex flex-col px-4 py-16 mx-auto md:flex-row">
            <img src="{{ env('TMDB_API_IMAGE_URL') }}/ngl2FKBlU4fhbdsrtdom9LVLBXw.jpg" alt="parasite"
                class="w-full rounded-lg lg:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Ant-Man</h2>
                <div class="flex items-center mt-2 text-sm text-gray-400">
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
                    <span class="mx-2"> | </span>
                    <span>Action, Comedi, Science Fiction</span>
                </div>

                <p class="mt-8 text-gray-300">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur nesciunt tenetur neque mollitia
                    eum! Molestias fugiat, totam saepe sit ducimus iusto dolor ex nulla repellendus commodi recusandae eos
                    quaerat nisi!
                </p>

                <div class="mt-12">
                    <h4 class="font-semibold text-white">
                        Featured Cast
                    </h4>
                    <div class="flex flex-wrap mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button
                        class="flex items-center justify-center px-5 py-3 text-sm font-semibold text-white transition-colors duration-300 transform bg-red-500 rounded hover:bg-red-600">
                        <svg class="w-6 fill-current" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M8 5v14l11-7z" />
                        </svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>

            </div>
        </div>
    </div> <!-- end movie-info -->

    <div class="border-b border-gray-800 movie-cast">
        <!-- movie-cast -->
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold">Cast</h2>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                <div class="mt-8">
                    <a href="">
                        <img src="{{ env('TMDB_API_IMAGE_URL') }}/ngl2FKBlU4fhbdsrtdom9LVLBXw.jpg" alt="parasite"
                            class="transition duration-150 ease-in-out rounded-lg hover:opacity-75">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-md hover:text-gray-300">
                            Real Name
                        </a>
                        <div class="flex items-center text-sm text-gray-400">

                            <span>John Smith</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end movie-cast -->
@endsection
