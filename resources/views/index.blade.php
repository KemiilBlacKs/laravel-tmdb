@extends('layouts.main')

@section('content')
    <div class="container px-4 pt-6 mx-auto">
        <div class="popular-movies">
            <h2 class="font-semibold tracking-wider text-red-500 uppercase">Trending Day</h2>

            <div class="grid grid-cols-1 gap-8 pt-4 pb-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                {{-- Boucle à travers la liste des films populaires du jour --}}
                {{-- Pour chaque film, afficher un composant MovieCard en lui passant les données du film et les genres disponibles en tant que propriétés. --}}
                @foreach ($trendingDay as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach

            </div>

        </div>
    </div>
@endsection
