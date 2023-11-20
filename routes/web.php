<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixHomeControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//LIST OF MOVIES 
Route::get('/',
[NetflixHomeControler::class, 'index'])->name('Netflix.home');

//SPECIFIC FILM
Route::get('/films/{film}/',
[NetflixHomeControler::class, 'films'])->name('Netflix.films');

//LIST OF PEOPLE
Route::get('/personnes',
[NetflixHomeControler::class, 'personnes'])->name('Netflix.personnes');

//SPECIFIC PERSONNE
Route::get('/peoples/{personne}/',
[NetflixHomeControler::class, 'peoples'])->name('Netflix.peoples');

//ADD PAGE
Route::get('/add',
[NetflixHomeControler::class, 'add'])->name('Netflix.add');

//ADD|STORE|MODIFY|PATCH|DELETE PERSONNE
Route::get('/add/Personne',
[NetflixHomeControler::class, 'addPersonne'])->name('Netflix.addPersonne');
Route::post('/add/Personne',
[NetflixHomeControler::class, 'storePersonne'])->name('Netflix.storePersonne');
Route::get('/peoples/{personne}/modifier/',
[NetflixHomeControler::class, 'modPersonne'])->name('Netflix.modPersonne');
Route::patch('/peoples/{personne}/modifier/' ,
[NetflixHomeControler::class, 'updatePersonne'])->name('Netflix.updatePersonne');


//ADD|STORE|MODIFY|PATCH|DELETE FILM
Route::get('/add/Film',
[NetflixHomeControler::class, 'addFilm'])->name('Netflix.addFilm');
Route::post('/add/Film',
[NetflixHomeControler::class, 'storeFilm'])->name('Netflix.storeFilm');
Route::get('/films/{film}/modifier/',
[NetflixHomeControler::class, 'modFilm'])->name('Netflix.modFilm');
Route::patch('/films/{film}/modifier' ,
[NetflixHomeControler::class, 'updateFilm'])->name('Netflix.updateFilm');



//ADD|STORE|DELETE LIEN FILM PERSONNE
Route::get('/add/FilmPersonne',
[NetflixHomeControler::class, 'addFilmPersonne'])->name('Netflix.addFilmPersonne');
Route::post('/add/FilmPersonne',
[NetflixHomeControler::class, 'storeFilmPersonne'])->name('Netflix.storeFilmPersonne');



