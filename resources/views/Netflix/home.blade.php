@extends('layouts.app')

    @section('title',"films")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @show

    @section('menu')
      <nav class="main-nav">                
        <a href="#home">Home</a>
        <a href="#Action">Action</a>
        <a href="#Aventure">Aventure</a>
        <a href="#Francais">Français</a>
        <a href="#Allemand">Allemand</a>
        <a class="btn btn-default" href="{{ route('Netflix.add') }}">Ajouter</a> 
        <a class="btn btn-default" href="{{ route('Netflix.personnes') }}">Regarder Personne</a>     
      </nav>
    @endsection
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <script>
          alert("success");
        </script>
    </div>
    @endif
    @if(session('erreur'))
    <div class="alert alert-erreur">
        {{ session('erreur') }}
        <script>
          alert("erreur");
        </script>
    </div>
    @endif

    @section('contenu')  
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Populaire</h1>
          <div class="box">
            @if (count($films))
              @foreach($films as $film)
                @if($film->cote >=90)
                <div style="text-align:center;">
                  <h2 id="name">{{$film->titre}}</h2>
                  <a href="{{ route('Netflix.films', [$film]) }}"><img id="affiche" src="{{$film->pochette}}" alt=""></a>
                </div>
                @endif
              @endforeach
            
              @else
                <p>Aucun films</p>
            @endif
          </div>
      </div>
      

      <h1 id="Action">Action</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            @if(strpos($film->type, 'Action') !== false)
            <div style="text-align:center;">
              <h2 id="name">{{$film->titre}}</h2>
              <a href="{{ route('Netflix.films', [$film]) }}"><img id="affiche" src="{{$film->pochette}}" alt=""></a>
            </div>
            @endif
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif                  
      </div>
      
      <h1 id="Aventure">Aventure</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            @if(strpos($film->type, 'Aventure') !== false)
            <div style="text-align:center;">
              <h2 id="name">{{$film->titre}}</h2>
              <a href="{{ route('Netflix.films', [$film]) }}"><img id="affiche" src="{{$film->pochette}}" alt=""></a>
            </div>
            @endif
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif              
      </div>
      

      <h1 id="Francais">Français</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            @if(strpos($film->langues, 'Français') !== false)
            <div style="text-align:center;">
              <h2 id="name">{{$film->titre}}</h2>
              <a href="{{ route('Netflix.films', [$film]) }}"><img id="affiche" src="{{$film->pochette}}" alt=""></a>
            </div>
            @endif
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif            
      </div>

      <h1 id="Allemand">Allemand</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            @if(strpos($film->langues, 'Allemand') !== false)
            <div style="text-align:center;">
              <h2 id="name">{{$film->titre}}</h2>
              <a href="{{ route('Netflix.films', [$film]) }}"><img id="affiche" src="{{$film->pochette}}" alt=""></a>
            </div>
            @endif
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif                
      </div>
      

    @endsection