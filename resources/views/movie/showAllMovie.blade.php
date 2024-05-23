@extends('layouts.app')

@section('main')

    <section id="show-all-movie">
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col-3 my-2">
                    <div class="card">
                        <img src="{{$movie->thumb}}" class="card-img-top" alt="{{$movie->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->series}}</p>
                            <p class="card-text">{{$movie->sale_date}}</p>
                            <p class="card-text">{{$movie->type}}</p>
                            <p class="card-text">{{$movie->price}}€</p>
                            <p><a href="{{ route('movies.show', ['movie' => $movie->id]) }}">scopri la trama</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
@endsection