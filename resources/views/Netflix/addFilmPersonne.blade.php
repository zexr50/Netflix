@extends('layouts.app')

    @section('title',"Page add FilmPersonne")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    @show
    @section('contenu')
    <form method="post" action="{{ route('Netflix.storeFilmPersonne') }}" enctype="multipart/form-data">
        @csrf
        <div class="main-container">
            <label for="film_id">ID Film</label>
            <input type="text" class="form-control" id="film_id" placeholder="film_id [id]" name="film_id" required>

            <label for="personne_id">ID Personne</label>
            <input type="text" class="form-control" id="personne_id"  placeholder="personne_id [id]" name="personne_id" required>

            <label for="lieuNaissance">role</label>
            <input type="text" class="form-control" id="role" placeholder="role" name="role" required>

        </div>

        <button type="submit" class="button">Enregistrer</button>
    </form>
@endsection
