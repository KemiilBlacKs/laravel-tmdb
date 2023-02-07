<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Movies;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trendingDay = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'trending/movie/day')
            ->json()['results'];

        $genresArray = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'genre/movie/list')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {

            return [$genre['id'] => $genre['name']];
        });

        return view('index')
            ->with('trendingDay', $trendingDay)
            ->with('genres', $genres);
    }

    public function listingDashboard()
    {
        $genresArray = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'genre/movie/list')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {

            return [$genre['id'] => $genre['name']];
        });
        $trendingDay = Movies::all();
        $rightMovies = [];
        foreach ($trendingDay as $movie) {

            $movie['genre_ids'] = unserialize($movie['genre_ids']);
            array_push($rightMovies, $movie);
        }

        return view('dashboard')
            ->with('trendingDay', $rightMovies)
            ->with('genres', $genres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function fetchAllMovies()
    {
    // Retrieving data from the API
    $response = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'trending/movie/day');

    // Checking the answer
    if ($response->successful())
    {
        $data = $response->json();
        $results = $data['results'];

        // Clearing the table
        DB::table('movies')->truncate();

        foreach ($results as $result) {
            // Verification of the existence of the movie in the database
            $movie = Movies::where('imdb_id', $result['id'])->first();

            // If the movie does not exist, create a new record
            if (!$movie) {
                $movie = new Movies();
            }
            // TODO: Replace this with a method like jsonSerialize for conserve the array
            $genres = serialize($result['genre_ids']);

            // Updating the movie data
            $movie->imdb_id = $result['id'];
            $movie->adult = $result['adult'];
            $movie->backdrop_path = $result['backdrop_path'];
            $movie->genre_ids = $genres;
            $movie->media_type = $result['media_type'];
            $movie->original_language = $result['original_language'];
            $movie->original_title = $result['original_title'];
            $movie->overview = $result['overview'];
            $movie->poster_path = $result['poster_path'];
            $movie->release_date = $result['release_date'];
            $movie->title = $result['title'];
            $movie->video = $result['video'];
            $movie->vote_average = $result['vote_average'];
            $movie->vote_count = $result['vote_count'];
            $movie->popularity = $result['popularity'];

            // Data backup
            $movie->save();
        }
    }

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'movie/'.$id.'?append_to_response=credits,videos,images')
            ->json();

        return view('show')
            ->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = DB::table('movies')->where('imdb_id', $id)->first();

        $movie->genre_ids = unserialize($movie->genre_ids);
        $genresArray = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'genre/movie/list')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {

            return [$genre['id'] => $genre['name']];
        });

        return view('edit-movie')
            ->with('movie', $movie)
            ->with('genres', $genres);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = DB::table('movies')->where('imdb_id', intval($id))->delete();

    }
}
