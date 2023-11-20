<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsPersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film_personne')->insert([
            [
                'film_id' => '1',
                'personne_id' => '1',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '2',
                'personne_id' => '2',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '3',
                'personne_id' => '3',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '4',
                'personne_id' => '4',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '5',
                'personne_id' => '5',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '6',
                'personne_id' => '6',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '7',
                'personne_id' => '7',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '8',
                'personne_id' => '8',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '9',
                'personne_id' => '9',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '10',
                'personne_id' => '10',
                'role' => 'Réalisateur',
            ],
            [
                'film_id' => '1',
                'personne_id' => '11',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '2',
                'personne_id' => '12',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '3',
                'personne_id' => '13',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '4',
                'personne_id' => '14',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '5',
                'personne_id' => '15',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '6',
                'personne_id' => '16',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '7',
                'personne_id' => '17',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '8',
                'personne_id' => '18',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '9',
                'personne_id' => '9',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '10',
                'personne_id' => '19',
                'role' => 'Producteur',
            ],
            [
                'film_id' => '1',
                'personne_id' => '20',
                'role' => 'Ellis Boyd red redding',
            ],
            [
                'film_id' => '2',
                'personne_id' => '21',
                'role' => 'Sonny Corleone',
            ],
            [
                'film_id' => '3',
                'personne_id' => '22',
                'role' => 'Jules Winnfield',
            ],
            [
                'film_id' => '4',
                'personne_id' => '23',
                'role' => 'Maximus',
            ],
            [
                'film_id' => '5',
                'personne_id' => '24',
                'role' => 'Neo',
            ],
            [
                'film_id' => '6',
                'personne_id' => '25',
                'role' => 'Mark Zuckerberg',
            ],
            [
                'film_id' => '7',
                'personne_id' => '26',
                'role' => 'Cooper',
            ],
            [
                'film_id' => '8',
                'personne_id' => '27',
                'role' => 'Grant',
            ],
            [
                'film_id' => '9',
                'personne_id' => '28',
                'role' => 'Jake Sully',
            ],
            [
                'film_id' => '10',
                'personne_id' => '29',
                'role' => 'Tony Stark',
            ],
            [
                'film_id' => '11',
                'personne_id' => '7',
                'role' => 'Producteur'
            ],
            [
                'film_id' => '11',
                'personne_id' => '7',
                'role' => 'Réalisateur'
            ]
        ]);
    }
}
