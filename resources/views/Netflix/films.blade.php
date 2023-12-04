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
            <?php if (str_starts_with($film->pochette, 'http')) {?>
                <img id="affiche" src="{{ $film->pochette }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
            <?php } else {?>
                <img id="affiche" src="{{ asset('img/films/' . $film->pochette) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}">
            <?php }?>
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
    <a href="{{ route('Netflix.peoples', [$film->realisateur]) }}">
        <?php if (str_starts_with($film->realisateur->photo, 'http')) {?>
            <img src="{{ $film->realisateur->photo }}" alt="{{ $film->realisateur->nom }}" title="{{ $film->realisateur->nom }}">
        <?php } else {?>
            <img src="{{ asset('img/personnes/' . $film->realisateur->photo) }}" alt="{{ $film->realisateur->nom }}" title="{{ $film->realisateur->nom }}">
        <?php }?>
    </a>

    <h2>PRODUCTEUR</h2>
    <h3 id="name">{{$film->producteur->nom}}</h3>
    <a href="{{ route('Netflix.peoples', [$film->producteur]) }}">
        <?php if (str_starts_with($film->producteur->photo, 'http')) {?>
            <img src="{{ $film->producteur->photo }}" alt="{{ $film->producteur->nom }}" title="{{ $film->producteur->nom }}">
        <?php } else {?>
            <img src="{{ asset('img/personnes/' . $film->producteur->photo) }}" alt="{{ $film->producteur->nom }}" title="{{ $film->producteur->nom }}">
        <?php }?>
    </a>

    <h2>ACTEURS</h2>
    @if(isset($film->personne[0]->photo))
    @foreach($film->personne as $photo)
        @if($photo->id == $film->realisateur->id || $photo->id == $film->producteur->id)
            @continue
        @endif
        <h3 id="name">{{$photo->nom}}</h3>
        <a href="{{ route('Netflix.peoples', [$photo]) }}">
            <?php if (str_starts_with($photo->photo, 'http')) {?>
                <img src="{{ $photo->photo }}" alt="{{ $photo->nom }}" title="{{ $photo->nom }}">
            <?php } else {?>
                <img src="{{ asset('img/personnes/' . $photo->photo) }}" alt="{{ $photo->nom }}" title="{{ $photo->nom }}">
            <?php }?>
        </a>
    @endforeach
    @else
        <h1>No photos available.</h1>
    @endif

@endsection
