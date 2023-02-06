<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Movies extends Model
{
    use HasFactory;

    public static function fetchMovies()
    {
        $response = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=YOUR_API_KEY&language=fr-FR&page=1');
        $movies = $response->json()['results'];
        foreach ($movies as $movie) {
            self::updateOrCreate(
                [
                    'movie_id' => $movie['id']
                ],
                [
                    'title' => $movie['title'],
                    // ... autres champs
                ]
            );
        }
    }
}
