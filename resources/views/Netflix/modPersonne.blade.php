@extends('layouts.app')

    @section('title',"Page modifier film")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    @show
    @section('contenu')

    <form method="post" action="{{ route('Netflix.updatePersonne' , [$personne]) }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="main-container">
            <label for="nomPersonne">Nom de la personne</label>
            <input type="text" class="form-control" id="nomPersonne" placeholder="Nom de la personne" name="nom" required>

            <label for="dateNaissance">Date de naissance</label>
            <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" required>

            <label for="lieuNaissance">Lieu de naissance</label>
            <input type="text" class="form-control" id="lieuNaissance" placeholder="Lieu de naissance" name="LieuNaissance" required>

            <label for="photo">Photo</label>
            <input type="text" class="form-control" id="photo" placeholder="photo de la personne" name="photo" required>

            <label for="rolePrincipal">Rôle principal</label>
            <input type="text" class="form-control" id="rolePrincipal" placeholder="Rôle principal" name="rolePrincipal" required>
        </div>

        <button type="submit" class="button">Enregistrer</button>
    </form>
@endsection
