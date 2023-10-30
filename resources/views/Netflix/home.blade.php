@extends('layouts.app')

    @section('title',"films")

    @section('contenu')  
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Populaire</h1>
          <div class="box">
            @if (count($films))
              @foreach($films as $film)
                @if($film->cote >=90)
                  <a href=""><img src="{{$film->pochette}}" alt=""></a>
                @endif
              @endforeach
            
              @else
                <p>Aucun films</p>
            @endif
          </div>
      </div>
      

      <h1 id="myList">Action</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            @if(strpos($film->type, 'Action') !== false)
              <a href=""><img src="{{$film->pochette}}" alt=""></a>
            @endif
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif                  
      </div>
      
      <h1 id="tvShows">Aventure</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            @if(strpos($film->type, 'Aventure') !== false)
              <a href=""><img src="{{$film->pochette}}" alt=""></a>
            @endif
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif              
      </div>
      

      <h1 id="movies">Français</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            @if(strpos($film->langues, 'Français') !== false)
              <a href=""><img src="{{$film->pochette}}" alt=""></a>
            @endif
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif            
      </div>

      <h1 id="originals">Allemand</h1>
      <div class="box">
        @if (count($films))
          @foreach($films as $film)
            @if(strpos($film->langues, 'Allemand') !== false)
              <a href=""><img src="{{$film->pochette}}" alt=""></a>
            @endif
          @endforeach
        
          @else
            <p>Aucun films</p>
        @endif                
      </div>

    @endsection