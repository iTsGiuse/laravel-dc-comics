@extends('layouts.app')

@section('main')
    <section id="create-movie">
        <div class="container">
            <form action="{{ route('movies.store') }}" method="POST">
                @csrf
                <div class="row mt-5">
                    <div class="col">
                        <label for="title">Inserisci il titolo</label>
                    </div>
                    <div class="col">
                        <input type="text" name="title" id="title">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="description">Inserisci la descrizione</label>
                    </div>
                    <div class="col">
                        <textarea name="description" id="description" type="text" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="thumb">Inserisci il link della foto</label>
                    </div>
                    <div class="col">
                        <input type="text" name="thumb" id="thumb">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="price">Inserisci il prezzo</label>
                    </div>
                    <div class="col">
                        <input type="number" name="price" id="price" step="0.01">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="series">Inserisci la serie</label>
                    </div>
                    <div class="col">
                        <input type="text" name="series" id="series">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="type">Inserisci il genere</label>
                    </div>
                    <div class="col">
                        <input type="text" name="type" id="type">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="sale_date">Inserisci la data di uscita</label>
                    </div>
                    <div class="col">
                        <input type="date" name="sale_date" id="sale_date">
                    </div>
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