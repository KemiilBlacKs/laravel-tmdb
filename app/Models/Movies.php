<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    // use HasFactory;

    /*protected $fillable = [
        'adult', 'backdrop_path', 'imdb_id',
        'original_language' 'original_title', 'overview',
        'poster_path', 'release_date', 'title', 'vote_average', 'vote_count'
    ];*/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    /*protected $casts = [
        'adult' => 'boolean',
        'vote_average' => 'float',
        'vote_count' => 'integer',
    ];*/

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    /*protected $dates = [
        'release_date',
    ];*/

    public static function updateMovies($movies)
    {
         //
    }
}
