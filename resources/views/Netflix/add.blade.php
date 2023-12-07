@extends('layouts.app')

    @section('title',"Page add")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    @show
    @section('contenu')
    @auth
    <div class="main-container">
        <a href="{{ route('Netflix.addPersonne') }}"><button type="button" class="button">Ajouter Personne</button></a>
        <a href="{{ route('Netflix.addFilmPersonne') }}"><button type="button" class="button">Ajouter Lien Personne et Film</button></a>
        <a href="{{ route('Netflix.addFilm') }}"><button type="button" class="button">Ajouter Film</button></a>
    </div>
    @endauth
@endsection
