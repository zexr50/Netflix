<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Film;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['nom','dateNaissance','LieuNaissance','photo','rolePrincipal'];

    public function films()
    {
        return $this->belongsToMany(Film::class);
    }
}
