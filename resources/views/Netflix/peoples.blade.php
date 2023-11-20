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
            <img src="{{$personne->photo}}">
            <p>Date de naissance: {{ $personne->dateNaissance }}</p>
            <p>Lieu de naissance:{{ $personne->LieuNaissance }}</p>
            <p>Role principal: {{ $personne->rolePrincipal }}</p>
            <a href="{{ route('Netflix.modPersonne' , [$personne]) }}"><button class="button">Modifier</button></a>
        </div>
    @else
        <p>La personne n'existe pas</p>
    @endif
    @foreach($personne->films as $film)
        <h1>{{$film->titre}}</h1>
        <img src="{{$film->pochette}}"/>
    @endforeach
    
@endsection