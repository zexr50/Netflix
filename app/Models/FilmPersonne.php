<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;
use App\Models\Personne;

class FilmPersonne extends Model
{
    use HasFactory;

    protected $table = 'film_personne';

    protected $fillable = ['film_id','personne_id','role'];

    public function fpFilm()
    {
        return $this->belongsToMany(Film::class);
    }
    public function fpPersonne()
    {
        return $this->belongsToMany(Personne::class);
    }
}