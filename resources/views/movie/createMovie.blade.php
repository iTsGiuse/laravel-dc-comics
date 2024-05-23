@extends('layouts.app')

@section('main')
    <section id="create-movie">
        <div class="container">
            <form action="store" method="POST">
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
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
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
                        <label for="number">Inserisci il prezzo</label>
                    </div>
                    <div class="col">
                        <input type="number" name="number" id="number" step="0.01">
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
                        <label for="sale_date">Inserisci la data di uscita</label>
                    </div>
                    <div class="col">
                        <input type="date" name="sale_date" id="sale_date">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <button>INVIA</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection