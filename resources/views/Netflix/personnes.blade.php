@extends('layouts.app')

    @section('title',"personnes")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @show
    @section('menu')
      <nav class="main-nav">                
        <a href="#home">Home</a>
        <a href="#Realisateur">Realisateur</a>
        <a href="#Acteur">Acteur</a>
        <a href="#Producteur">Producteur</a>
        <a href="#USA">USA</a>
      </nav>
    @endsection

    @section('contenu')  
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Né avant 1950</h1>
          <div class="box">
            @if (count($personnes))
              @foreach($personnes as $personne)
                @if($personne->dateNaissance < '1950-01-01')
                  <a href="{{ route('Netflix.peoples', [$personne]) }}"><img src="{{$personne->photo}}" alt=""></a>
                @endif
              @endforeach
            
              @else
                <p>Aucune personnes</p>
            @endif                  
          </div>

          <h1 id="Realisateur">Réalisateur</h1>
          <div class="box">
            @if (count($personnes))
              @foreach($personnes as $personne)
                @if($personne->rolePrincipal == 'Réalisateur')
                  <a href="{{ route('Netflix.peoples', [$personne]) }}"><img src="{{$personne->photo}}" alt=""></a>
                @endif
              @endforeach
            
              @else
                <p>Aucune personnes</p>
            @endif                  
          </div>

          <h1 id="Acteur">Acteur</h1>
          <div class="box">
            @if (count($personnes))
              @foreach($personnes as $personne)
                @if($personne->rolePrincipal == 'Acteur')
                  <a href="{{ route('Netflix.peoples', [$personne]) }}"><img src="{{$personne->photo}}" alt=""></a>
                @endif
              @endforeach
            
              @else
                <p>Aucune personnes</p>
            @endif                  
          </div>

          <h1 id="Producteur">Producteur</h1>
          <div class="box">
            @if (count($personnes))
              @foreach($personnes as $personne)
                @if($personne->rolePrincipal == 'Producteur')
                  <a href="{{ route('Netflix.peoples', [$personne]) }}"><img src="{{$personne->photo}}" alt=""></a>
                @endif
              @endforeach
            
              @else
                <p>Aucune personnes</p>
            @endif                  
          </div>

          <h1 id="USA">USA</h1>
          <div class="box">
            @if (count($personnes))
              @foreach($personnes as $personne)
                @if(strpos($personne->LieuNaissance, 'USA') !== false)
                  <a href="{{ route('Netflix.peoples', [$personne]) }}"><img src="{{$personne->photo}}" alt=""></a>
                @endif
              @endforeach
            
              @else
                <p>Aucun films</p>
            @endif                  
          </div>
      </div>

@endsection