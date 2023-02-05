<!-- Order your soul. Reduce your wants. - Augustine -->
<div class="mt-8">
    <a href="">
        <img src="{{ env('TMDB_API_IMAGE_URL') }}.{{ $movie['poster_path'] }}" alt="poster"
            class="transition duration-150 ease-in-out rounded-lg hover:opacity-75">
    </a>
    <div class="mt-2">
        <a href="#" class="mt-2 text-md hover:text-gray-300">
            {{-- Vérification de l'existence du titre dans le tableau $movie --}}
            {{-- S'il n'existe pas, utiliser la clé 'name' à la place --}}
            {{ isset($movie['title']) ? $movie['title'] : (isset($movie['name']) ? $movie['name'] : '') }}
        </a>
        <div class="flex items-center text-sm text-gray-400">
            <span><svg class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                    <g data-name="Layer 2">
                        <path
                            d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                            data-name="star" />
                    </g>
                </svg></span>
            <span class="ml-1"> {{ $movie['vote_average'] * 10 }}% </span>
            <span class="mx-2"> | </span>
            <span>
                {{-- Vérification de l'existence de la clé 'release_date' dans le tableau $movie --}}
                {{-- Si elle n'existe pas, utiliser la clé 'first_air_date' à la place --}}
                {{ isset($movie['release_date']) ? \Carbon\Carbon::createFromFormat('Y-m-d', $movie['release_date'])->format('d F Y') : (isset($movie['first_air_date']) ? \Carbon\Carbon::createFromFormat('Y-m-d', $movie['first_air_date'])->format('d F Y') : '') }}
            </span>
        </div>
        <div class="text-sm text-gray-400">
            @foreach ($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }} @if (!$loop->last)
                    ,
                @endif
            @endforeach
        </div>
    </div>
</div>
