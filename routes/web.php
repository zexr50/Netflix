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
[NetflixHomeControler::class, 'add'])->name('Netflix.add')->middleware('CheckRole:admin');

//ADD|STORE|MODIFY|PATCH|DELETE PERSONNE
Route::get('/add/Personne',
[NetflixHomeControler::class, 'addPersonne'])->name('Netflix.addPersonne')->middleware('CheckRole:admin');
Route::post('/add/Personne',
[NetflixHomeControler::class, 'storePersonne'])->name('Netflix.storePersonne');
Route::get('/peoples/{personne}/modifier/',
[NetflixHomeControler::class, 'modPersonne'])->name('Netflix.modPersonne')->middleware('CheckRole:admin');
Route::patch('/peoples/{personne}/modifier/' ,
[NetflixHomeControler::class, 'updatePersonne'])->name('Netflix.updatePersonne');
Route::delete('/peoples/{id}',
[NetflixHomeControler::class, 'destroyPersonne'])->name('Netflix.destroyPersonne')->middleware('CheckRole:admin');



//ADD|STORE|MODIFY|PATCH|DELETE FILM
Route::get('/add/Film',
[NetflixHomeControler::class, 'addFilm'])->name('Netflix.addFilm')->middleware('CheckRole:admin');
Route::post('/add/Film',
[NetflixHomeControler::class, 'storeFilm'])->name('Netflix.storeFilm');
Route::get('/films/{film}/modifier/',
[NetflixHomeControler::class, 'modFilm'])->name('Netflix.modFilm')->middleware('CheckRole:admin');
Route::patch('/films/{film}/modifier' ,
[NetflixHomeControler::class, 'updateFilm'])->name('Netflix.updateFilm');
Route::delete('/films/{id}',
[NetflixHomeControler::class, 'destroyFilm']) ->name('Netflix.destroyFilm')->middleware('CheckRole:admin');



//ADD|STORE|DELETE LIEN FILM PERSONNE
Route::get('/add/FilmPersonne',
[NetflixHomeControler::class, 'addFilmPersonne'])->name('Netflix.addFilmPersonne')->middleware('CheckRole:admin');
Route::post('/add/FilmPersonne',
[NetflixHomeControler::class, 'storeFilmPersonne'])->name('Netflix.storeFilmPersonne');


//ROUTE ACCOUNT MANAGMENT

Route::get('/showLogin',
[NetflixHomeControler::class, 'showLogin']) ->name('Netflix.showLogin');
Route::post('/Login',
[NetflixHomeControler::class, 'Login']) ->name('Netflix.Login');
Route::get('/Logout',
[NetflixHomeControler::class, 'Logout']) ->name('Netflix.Logout');
