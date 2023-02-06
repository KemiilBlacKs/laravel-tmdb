<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <tr>
        <td class="py-4 pl-4 pr-3 text-sm whitespace-nowrap sm:pl-6">
            <div class="flex items-center">
                <div class="flex-shrink-0 w-10">
                    <img class="w-10 h-10 rounded-md" src="{{ env('TMDB_API_IMAGE_URL') }}.{{ $movie['poster_path'] }}"
                        alt="">
                </div>
                <div class="ml-4">
                    <div class="font-medium text-gray-900">
                        {{ isset($movie['title']) ? $movie['title'] : (isset($movie['name']) ? $movie['name'] : '') }}
                    </div>
                </div>
            </div>
        </td>
        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
            <div class="text-gray-900">
                @foreach ($movie['genre_ids'] as $genre)
                    {{ $genres->get($genre) }} @if (!$loop->last)
                        ,
                    @endif
                @endforeach
            </div>
        </td>
        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
            <div class="flex items-center text-sm text-gray-400">
                <span><svg class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                        <g data-name="Layer 2">
                            <path
                                d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.67a1 1 0 01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1 0 011.8 0l2.54 5.12 5.7.83a1 1 0 01.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0 01-.4 1 1 1 0 01-.62.18z"
                                data-name="star" />
                        </g>
                    </svg></span>
                <span class="ml-1 text-green-500">{{ $movie['vote_average'] * 10 }} %</span>
            </div>
        </td>
        <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">
            {{ isset($movie['release_date']) ? \Carbon\Carbon::createFromFormat('Y-m-d', $movie['release_date'])->format('d F Y') : (isset($movie['first_air_date']) ? \Carbon\Carbon::createFromFormat('Y-m-d', $movie['first_air_date'])->format('d F Y') : '') }}
        </td>
        <td class="relative py-4 pl-3 pr-4 text-sm font-medium text-right whitespace-nowrap sm:pr-6">
            <a href="{{ route('movies.edit', $movie['id']) }}" class="text-indigo-600 hover:text-indigo-900">Edit<span
                    class="sr-only">,
                    {{ isset($movie['title']) ? $movie['title'] : (isset($movie['name']) ? $movie['name'] : '') }}</span></a>
        </td>
    </tr>

</div>
