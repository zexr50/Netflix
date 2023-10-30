@extends('layouts.app')

    @section('title',"personnes")

    @section('contenu')  
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Populaire</h1>
          <div class="box">
            @if(count($personnes))
              @foreach($personnes as $personne)
                  <a href=""><img src="{{$personne->photo}}" alt=""/></a>
              @endforeach

              @else
                <p>Aucune Personnes</p>
            @endif
          </div>
      </div>

@endsection