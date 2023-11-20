@extends('layouts.app')

    @section('title',"Page modifier film")
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/add.css') }}">
    @show
    @section('contenu')
    <form method="POST" action="{{ route('Netflix.updateFilm', [$film]) }}" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="main-container">
        <label for="titre">Titre</label>

            <input type="text" class="form-control" id="titre" placeholder="Titre du film" name="titre" required>

            <label for="resume">Résumé</label>
            <textarea class="form-control" id="resume" placeholder="Résumé du film" name="resume" required></textarea>

            <label for="pochette">Pochette</label>
            <input type="text" class="form-control" id="pochette" placeholder="URL de la pochette" name="pochette" required>

            <label for="duree">Durée</label>
            <input type="text" class="form-control" id="duree" placeholder="Durée du film" name="durée" required>

            <label for="realisateur">Réalisateur</label>
            <input type="text" class="form-control" id="realisateur" placeholder="Réalisateur du film [id]" name="realisateur" required>

            <label for="producteur">Producteur</label>
            <input type="text" class="form-control" id="producteur" placeholder="Producteur du film [id]" name="producteur" required>

            <label for="annee">Année</label>
            <input type="text" class="form-control" id="annee" placeholder="Année de sortie" name="année" required>

            <label for="lienVideo">Lien de la vidéo</label>
            <input type="text" class="form-control" id="lienVideo" placeholder="URL de la vidéo" name="lienVideo" required>

            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" placeholder="Type du film" name="type" required>

            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" placeholder="Marque du film" name="brand" required>

            <label for="cote">Cote</label>
            <input type="text" class="form-control" id="cote" placeholder="Cote du film" name="cote" required>

            <label for="rating">Rating</label>
            <input type="text" class="form-control" id="rating" placeholder="Note du film" name="rating" required>

            <label for="langues">Langues</label>
            <input type="text" class="form-control" id="langues" placeholder="Langues du film" name="langues" required>

            <label for="sousTitres">Sous-titres</label>
            <input type="text" class="form-control" id="sousTitres" placeholder="Sous-titres du film" name="sousTitres" required>   
        </div>

        <button type="submit" class="button">Enregistrer</button>
    </form>
@endsection
