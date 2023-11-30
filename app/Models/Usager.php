<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usager extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nomUsager',
        'password',
        'email',
        'prenom',
        'nom',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
