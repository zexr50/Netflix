@extends('layouts.app')

    @section('title',"Page Films")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/films.css') }}">
    @show

    @section('contenu')
    
    <h1>Page du film {{ $film->titre }}</h1>
    @if (isset($film))
        <div>
            <h1 id="titre">{{ $film->titre }}</h1>
            <img id="pochette" src="{{ $film->pochette }}"/>
            <p id="resume">resume: {{ $film->resume }}</p>
            <p id="duree">durée: {{ $film->durée}}</p>
            <p>année: {{ $film->année}}</p>
            <iframe width="420" height="315"src="{{ $film->lienVideo}}"></iframe>
            <p>type: {{ $film->type}}</p>
            <p>brand: {{ $film->brand}}</p>
            <p>cote: {{ $film->cote}}</p>
            <p>rating: {{ $film->rating}}</p>
            <p>langues: {{ $film->langues}}</p>
            <p>sous titres: {{ $film->sousTitres}}</p>
            <a href="{{ route('Netflix.modFilm' , [$film]) }}"><button class="button">Modifier</button></a>

            <form method="post" action="{{ route('Netflix.destroyFilm', [$film->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="button">SUPPRIMER</button>
            </form>

        </div>
    @else
        <p>Le film n'existe pas</p>
    @endif
    
    <h2>REALISATEUR</h2>
    <h3 id="name">{{$film->realisateur->nom}}</h3>
    <a href="{{ route('Netflix.peoples', [$film->realisateur]) }}"><img src="{{$film->realisateur->photo}}" alt=""></a>

    <h2>PRODUCTEUR</h2>
    <h3 id="name">{{$film->producteur->nom}}</h3>
    <a href="{{ route('Netflix.peoples', [$film->producteur]) }}"><img src="{{$film->producteur->photo}}" alt=""></a>

    <h2>ACTEURS</h2>
    @if(isset($film->personne[0]->photo))
    @foreach($film->personne as $photo)
        @if($photo->id == $film->realisateur->id || $photo->id == $film->producteur->id)
            @continue
        @endif
        <h3 id="name">{{$photo->nom}}</h3>
        <a href="{{ route('Netflix.peoples', [$photo]) }}"><img src="{{$photo->photo}}" alt=""></a>
    @endforeach
    @else
        <h1>No photos available.</h1>
    @endif

@endsection
