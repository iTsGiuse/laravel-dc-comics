@extends('layouts.app')

@section('main')

    <section id="show-all-movie">
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                <div class="col-3 my-2">
                    <div class="card">
                        <img src="{{$movie->thumb}}" class="card-img-top" alt="{{$movie->title}}">
                        <div id="btn-edit" class="d-flex align-items-center justify-content-center">    
                            <a class="btn btn-light me-1" href="{{ route('movies.edit', ['movie' => $movie->id]) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('movies.destroy', ['movie' => $movie->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button class="btn btn-light" type="submit"><i class="fa-solid fa-trash" style="color: red;"></i></button>
                            </form>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <p class="card-text">{{$movie->type}}</p>
                            <p class="card-text">{{$movie->price}}€</p>
                            <p><a class="btn btn-primary" href="{{ route('movies.show', ['movie' => $movie->id]) }}">trama</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
@endsection