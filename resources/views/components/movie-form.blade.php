<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <form class="space-y-8 divide-y divide-gray-200" method="POST">
        @csrf
        @method('delete')
        <input disabled id="id" name="id" type="number" value="{{ $movie->id }}"
            class="hidden block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <input disabled id="imdb_id" name="imdb_id" type="text" value="{{ $movie->imdb_id }}"
            class="hidden block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        <div class="space-y-8 divide-y divide-gray-200">
            <div>

                <div class="grid grid-cols-1 mt-6 gap-y-6 gap-x-4 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <img src="{{ env('TMDB_API_IMAGE_URL') }}.{{ $movie->poster_path }}" alt="poster"
                            class="w-64 transition duration-150 ease-in-out rounded-lg hover:opacity-75">

                        <label for="title" class="block mt-4 text-sm font-medium text-gray-700">Title</label>
                        <div class="flex mt-1 rounded-md shadow-sm">

                            <input required id="title" name="title" type="text" value="{{ $movie->title }}"
                                autocomplete="title"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <label for="overview" class="block text-sm font-medium text-gray-700">Overview</label>
                        <div class="mt-1">
                            <textarea id="overview" name="overview" rows="5"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $movie->overview }}</textarea>
                        </div>

                    </div>
                </div>
            </div>

        </div>
</div>

<div class="pt-5">
    <div class="flex justify-end">
        <button disabled type="button"
            class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Delete</button>
        <button disabled type="button"
            class="px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</button>
        <button disabled type="button"
            class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
    </div>
</div>
</form>

</div>
