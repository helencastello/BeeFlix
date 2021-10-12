@extends('index')
@section('title', 'Home Page')

@section('style')
    @include('style')
@stop

@section('content')
    @foreach($moviesByGenre as $genreKey => $genre)
        <div style="margin-bottom: 1em">
            <h2 style="font-kerning: auto" class="row">{{$genre['genre_name']}}</h2>
            <div class="row">
                @foreach($genre['movies'] as $movieKey => $movie)
                    <div style="margin: 10px">
                        <div><img width="200dp" height="300dp" src="{{asset('/images/').'/'.$movie->photo}}"></div>
                        <div style="text-align: center; margin-top: 10px; margin-bottom: 10px; color: white">{{$movie->title}}</div>
                        <div style="text-align: center"><a href="{{ url('/movies/detail/'.$movie->id) }}" class="btn btn-outline-light">See Film</a></div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@stop
