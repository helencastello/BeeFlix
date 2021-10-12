<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $genres = Genre::all();
        $movies = Movie::all();

        $moviesByGenre = collect($genres)->map(static function ($j) use ($movies) {
            $movieData = collect($movies)
                ->where('genre_id', $j->id);
            return [
                'genre_id' => $j->id,
                'genre_name' => $j->name,
                'movies' => $movieData
            ];
        });
        return view('home-page', ['moviesByGenre'=> $moviesByGenre]);
    }
}
