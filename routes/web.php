<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetflixHomeControler;
use App\Http\Controllers\FilmsController;

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


Route::get('/',
[FilmsController::class, 'index'])->name('Netflix.home');

Route::get('create',
[NetflixHomeControler::class, 'create'])->name('Netflix.create');

Route::get('films',
[NetflixHomeControler::class, 'films'])->name('Netflix.films');

Route::get('personnes',
[NetflixHomeControler::class, 'personnes'])->name('Netflix.personnes');
