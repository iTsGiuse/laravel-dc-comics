@extends('layouts.app')

@section('main')
    <section id="show-single-movie">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <img src="{{$movie->thumb}}" class="card-img-top" alt="{{$movie->title}}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->description}}</p>
                            <p class="card-text">{{$movie->series}}</p>
                            <p class="card-text">{{$movie->sale_date}}</p>
                            <p class="card-text">{{$movie->type}}</p>
                            <p class="card-text">{{$movie->price}}€</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col text-center">
                    <form action="/movies">
                        <button type="submit">Torna indietro</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection