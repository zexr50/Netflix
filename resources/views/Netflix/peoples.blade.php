@extends('layouts.app')

    @section('title',"Page personne")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/people.css') }}">
    @show
    @section('contenu')
    
    <h1>Page de {{ $personne->nom }}</h1>
    @if (isset($personne))
        <div>
            <h1>Nom: {{ $personne->nom }}</h1>
            <?php if (str_starts_with($personne->photo, 'http')) {?>
                <img src="{{ $personne->photo }}" alt="{{ $personne->nom }}" title="{{ $personne->nom }}">
            <?php } else {?>
                <img src="{{ asset('img/personnes/' . $personne->photo) }}" alt="{{ $personne->nom }}" title="{{ $personne->nom }}">
            <?php }?>
            <p>Date de naissance: {{ $personne->dateNaissance }}</p>
            <p>Lieu de naissance:{{ $personne->LieuNaissance }}</p>
            <p>Role principal: {{ $personne->rolePrincipal }}</p>
            <a href="{{ route('Netflix.modPersonne' , [$personne]) }}"><button class="button">Modifier</button></a>
            <form method="post" action="{{ route('Netflix.destroyPersonne', [$personne->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="button">SUPPRIMER</button>
            </form>
        </div>
    @else
        <p>La personne n'existe pas</p>
    @endif
    @foreach($personne->films as $film)
        <h1>{{$film->titre}}</h1>
        <?php if (str_starts_with($film->pochette, 'http')) {?>
            <img id="affiche" src="{{ $film->pochette }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
        <?php } else {?>
            <img id="affiche" src="{{ asset('img/films/' . $film->pochette) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
        <?php }?>
    @endforeach
    
@endsection