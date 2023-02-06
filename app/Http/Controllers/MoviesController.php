<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
            ->get(env('TMDB_ENDPOINT').'trending/all/day')
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
        $trendingDay = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'trending/all/day')
            ->json()['results'];

        $genresArray = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'genre/movie/list')
            ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function ($genre) {

            return [$genre['id'] => $genre['name']];
        });

        return view('dashboard')
            ->with('trendingDay', $trendingDay)
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
        $movie = Http::withToken(config('services.tmdb.api_key'))
            ->get(env('TMDB_ENDPOINT').'movie/'.$id.'?append_to_response=credits,videos,images')
            ->json();

        return view('edit-movie')
            ->with('movie', $movie);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
