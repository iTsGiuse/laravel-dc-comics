@extends('layouts.app')

@section('main')
    <section id="show-single-movie">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <img src="{{$movies->thumb}}" class="card-img-top" alt="{{$movies->title}}">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$movies->title}}</h5>
                            <p class="card-text">{{$movies->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection