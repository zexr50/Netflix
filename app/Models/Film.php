<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personne;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['titre','resume','pochette','durée','realisateur','producteur','année','lienVideo','type','brand','cote','rating','langues','sousTitres'];

    public function Personne()
    {
        return $this->belongsToMany(Personne::class);
    }
    
}
