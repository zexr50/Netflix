<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;
use App\Models\Film;
use App\Models\FilmPersonne;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\PersonneRequest;
use App\Http\Requests\FilmRequest;
use App\Http\Requests\FilmPersonneRequest;

class NetflixHomeControler extends Controller
{
    //MAIN PAGE MOVIES VIEW
    public function index()
    {
        $films = Film::all();
        return View('Netflix.home', compact('films'));
    }
    
    //ADD VIEW
    public function add()
    {
        return View('Netflix.add');
    }

    //ADD PERSONNE
    public function addPersonne()
    {
        return View('Netflix.addPersonne');
    }
    //STORE PERSONNE
    public function storePersonne(PersonneRequest $request)
    {
        try {
            $personne = new Personne($request->all());
            $personne->save();
            return redirect()->route('Netflix.home')->with('success', 'Personne ajoutée avec succès!');
            
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('Netflix.home')->withErrors(['ERREUR Personne non ajoutée!']);
        }
        return redirect()->route('Netflix.home');
    }
    //MODIFY PERSONNE
    public function modPersonne(Personne $personne)
    {
        return View('Netflix.modPersonne', compact('personne'));
    }
    //UPDATE PERSONNE
    public function updatePersonne(PersonneRequest $request, Personne $personne)
    {
        try{
            $personne->nom = $request->nom;
            $personne->dateNaissance = $request->dateNaissance;
            $personne->LieuNaissance = $request->LieuNaissance;
            $personne->photo = $request->photo;
            $personne->rolePrincipal = $request->rolePrincipal;

            $personne->save();
            return redirect()->route('Netflix.home')->with('success', 'Personne Modifier avec succès!');;
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('Netflix.home')->withErrors(['ERREUR Personne non Modifier!']);
        }
        return redirect()->route('Netflix.home');

    }

    //ADD FILM
    public function addFilm()
    {
        return View('Netflix.addFilm');
    }
    //STORE FILM
    public function storeFilm(FilmRequest $request)
    {
        try {
            $Film = new Film($request->all());
            $Film->save();
            return redirect()->route('Netflix.home')->with('success', 'Film ajoutée avec succès!');;
        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('Netflix.home')->withErrors(['ERREUR film non ajoutée!']);
        }
        return redirect()->route('Netflix.home');

    }
    //MODIFIER FILM
    public function modFilm(Film $film)
    {
        return View('Netflix.modFilm', compact('film'));
    }
    //UPDATE FILM
    public function updateFilm(FilmRequest $request, Film $film)
    {
        try{
            $film->titre = $request->titre;
            $film->resume = $request->resume;
            $film->pochette = $request->pochette;
            $film->durée = $request->durée;
            $film->realisateur = $request->realisateur;
            $film->producteur = $request->producteur;
            $film->année = $request->année;
            $film->lienVideo = $request->lienVideo;
            $film->type = $request->type;
            $film->brand = $request->brand;
            $film->cote = $request->cote;
            $film->rating = $request->rating;
            $film->langues = $request->langues;
            $film->sousTitres = $request->sousTitres;

            $film->save();
            return redirect()->route('Netflix.home')->with('success', 'Film Modifier avec succès!');;
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('Netflix.home')->withErrors(['ERREUR film non Modifier!']);
        }
        return redirect()->route('Netflix.home');

    }

    //ADD FILM_PERSONNE
    public function addFilmPersonne()
    {
        return View('Netflix.addFilmPersonne');
    }
    //STORE FilmPersonne !!! make sure to check spelling
    public function storeFilmPersonne(FilmPersonneRequest $request)
    {
        try {
            $FilmPersonne = new FilmPersonne($request->all());
            $FilmPersonne->save();
            return redirect()->route('Netflix.home')->with('success', 'FilmPersonne ajoutée avec succès!');

        } catch (\Throwable $e) {
            Log::debug($e);
            return redirect()->route('Netflix.home')->withErrors(['ERREUR FilmPersonne non ajoutée!']);
        }
        return redirect()->route('Netflix.home');
    }

    
    //MOVIE ZOOM
    public function films(Film $film, Personne $personne)
    {
        return View('Netflix.films' , compact('film', 'personne'));
    }
    
    //ALL ACTORS/PRODUCERS/DIRECTORS VIEW
    public function personnes()
    {
        $personnes = Personne::all();
        return View('Netflix.personnes', compact(('personnes')));
    }

    //ZOOM PERSONNE VIEW
    public function peoples(Personne $personne)
    {
        return View('Netflix.peoples' , compact('personne'));
    }
    public function movies()
    {
        $films = Film::all();
        return View('Netflix.peoples', compact('film'));
    }
}
