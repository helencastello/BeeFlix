<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public  function detail($request){
        $movie = DB::table('movies')
            ->select([
                'movies.id',
                'movies.genre_id',
                'movies.title',
                'movies.photo',
                'movies.description',
                'movies.rating',
                'genres.name as genre_name',
            ])
            ->join('genres', function ($join) use ($request) {
                $join->on('genres.id', '=', 'movies.genre_id');
            })
            ->where('movies.id', '=', $request)
            ->first();

        $episodes = DB::table('episodes')
            ->select()
            ->where('movie_id', '=', $request)
            ->paginate(3);

        return view('movie-detail-page', [
            'movie' => $movie,
            'episodes' => $episodes
        ]);
    }
}
