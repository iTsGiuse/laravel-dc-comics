@extends('layouts.app')

@section('main')
    <section id="edit-movie">
        <div class="container">
            <div class="row mt-3">
                <div class="col text-center">
                    <h1>Modifica: {{$movie->title}}</h1>
                </div>
            </div>
            <form action="{{ route('movies.update', ['movie' => $movie->id]) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="row mt-5">
                    <div class="col">
                        <label for="title">Inserisci il titolo</label>
                    </div>
                    <div class="col">
                        <input type="text" name="title" id="title" value="{{ old('title', $movie->title)}}">
                    </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="description">Inserisci la descrizione</label>
                    </div>
                    <div class="col">
                        <textarea name="description" id="description" type="text" cols="30" rows="10">{{ old('description', $movie->description)}}</textarea>
                    </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="thumb">Inserisci il link della foto</label>
                    </div>
                    <div class="col">
                        <input type="text" name="thumb" id="thumb" value="{{ old('thumb', $movie->thumb)}}">
                    </div>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="price">Inserisci il prezzo</label>
                    </div>
                    <div class="col">
                        <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $movie->price)}}">
                    </div>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="series">Inserisci la serie</label>
                    </div>
                    <div class="col">
                        <input type="text" name="series" id="series" value="{{ old('series', $movie->series)}}">
                    </div>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="type">Inserisci il genere</label>
                    </div>
                    <div class="col">
                        <input type="text" name="type" id="type" value="{{ old('type', $movie->type)}}">
                    </div>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="sale_date">Inserisci la data di uscita</label>
                    </div>
                    <div class="col">
                        <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date', $movie->sale_date)}}">
                    </div>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <button type="submit">INVIA</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection