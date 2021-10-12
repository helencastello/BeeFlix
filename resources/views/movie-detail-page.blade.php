@extends('index')
@section('title', $movie->title)

@section('style')
    @include('style')
@stop

@section('content')
    <div style="margin: 20px">
        <div class="row" style="margin-bottom: 4em">
            <div ><img width="300dp" height="450dp" src="{{asset('/images/').'/'.$movie->photo}}"></div>
            <div class="col">
                <div class="h2">{{$movie->title}}</div>
                <div>
                    <div>
                        @foreach(range(1,5) as $i)
                            <span class="fa-stack" style="width:1em">
                            @if($i <= $movie->rating)
                                    <span class="fa fa-star checked"></span>
                                @else
                                    <span class="fa fa-star"></span>
                                @endif
                        </span>
                        @endforeach
                    </div>
                    <div>
                        @if($movie->rating > 3)
                            <span class="badge badge-success">{{$movie->rating}} star(s)</span>
                        @elseif($movie->rating == 3)
                            <span class="badge badge-warning">{{$movie->rating}} star(s)</span>
                        @else
                            <span class="badge badge-danger">{{$movie->rating}} star(s)</span>
                        @endif
                    </div>
                </div>
                <div style="margin-top: 1em" class="movie-description">{{$movie->description}}</div>
                <br>
                <div> Category : <a href="{{ url('/movies/category/'.$movie->genre_id) }}">{{$movie->genre_name}}</a></div>
            </div>
            <div class="col">
                <h2 style="text-align: center">Episode</h2>
                <table  class="table table-bordered table-dark">
                    <thead>
                    <tr>
                        <th  style="text-align: center">Episode</th>
                        <th  style="text-align: center">Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($episodes as $episode)
                        <tr>
                            <td  style="text-align: center">{{$episode->episode}}</td>
                            <td >{{$episode->title}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $episodes->links() }}
            </div>
        </div>
    </div>
@stop
