<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category($request){
        $genre = DB::table('genres')
            ->select()
            ->where('id', '=', $request)
            ->first();
        $movies = DB::table('movies')
            ->select()
            ->where('genre_id', '=', $genre->id)
            ->get();
        $genre->movies = $movies;

        return view('movie-list-page', [
            'genre'=> $genre
        ]);
    }
}
