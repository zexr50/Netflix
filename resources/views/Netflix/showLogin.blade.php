@extends('layouts.app')

    @section('title',"Login Form")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @show
    @section('contenu')
    @if(session('erreur'))
    <div class="alert alert-erreur">
        {{ session('erreur') }}
        <script>
          alert("Informations Invalides");
        </script>
    </div>
    @endif
    <form method="post" action="{{ route('Netflix.Login') }}" enctype="multipart/form-data">
        @csrf
        <div class="main-container">
            <label for="Usager">Usager:</label>
            <input type="text" class="form-control" id="nomUsager" name="nomUsager" required>
            
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" id="password" name="password" required>
            
            <button type="submit" class="button">Enregistrer</button>
        </div>
        
    </form>
@endsection
