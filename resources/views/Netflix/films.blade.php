@extends('layouts.app')

    @section('title',"Page Films")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/films.css') }}">
    @show

    @section('contenu')
    
    <h1>Page du film {{ $film->titre }}</h1>
    @if (isset($film))
        <div>
            <h1>{{ $film->titre }}</h1>
            <img src="{{ $film->pochette }}"/>
            <p>resume: {{ $film->resume }}</p>
            <p>durée: {{ $film->durée}}</p>
            <p>realisateur: {{ $film->realisateur}}</p>
            <p>producteur: {{ $film->producteur}}</p>
            <p>année: {{ $film->année}}</p>
            <iframe width="420" height="315"src="{{ $film->lienVideo}}"></iframe>
            <p>type: {{ $film->type}}</p>
            <p>brand: {{ $film->brand}}</p>
            <p>cote: {{ $film->cote}}</p>
            <p>rating: {{ $film->rating}}</p>
            <p>langues: {{ $film->langues}}</p>
            <p>sous titres: {{ $film->sousTitres}}</p>
            <a href="{{ route('Netflix.modFilm' , [$film]) }}"><button class="button">Modifier</button></a>
        </div>
    @else
        <p>Le film n'existe pas</p>
    @endif
    
    @if(isset($film->personne[0]->photo))
    @foreach($film->personne as $photo)
        <h1>{{$photo->nom}}</h1>
        <img src="{{$photo->photo}}"/>
    @endforeach
    @else
        <h1>No photos available.</h1>
    @endif

@endsection
