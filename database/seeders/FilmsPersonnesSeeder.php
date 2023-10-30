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
        DB::table('films_personnes')->insert([
            [
                'film' => '1',
                'personne' => '1',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '2',
                'personne' => '2',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '3',
                'personne' => '3',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '4',
                'personne' => '4',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '5',
                'personne' => '5',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '6',
                'personne' => '6',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '7',
                'personne' => '7',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '8',
                'personne' => '8',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '9',
                'personne' => '9',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '10',
                'personne' => '10',
                'role' => 'Réalisateur',
            ],
            [
                'film' => '1',
                'personne' => '11',
                'role' => 'Producteur',
            ],
            [
                'film' => '2',
                'personne' => '12',
                'role' => 'Producteur',
            ],
            [
                'film' => '3',
                'personne' => '13',
                'role' => 'Producteur',
            ],
            [
                'film' => '4',
                'personne' => '14',
                'role' => 'Producteur',
            ],
            [
                'film' => '5',
                'personne' => '15',
                'role' => 'Producteur',
            ],
            [
                'film' => '6',
                'personne' => '16',
                'role' => 'Producteur',
            ],
            [
                'film' => '7',
                'personne' => '17',
                'role' => 'Producteur',
            ],
            [
                'film' => '8',
                'personne' => '18',
                'role' => 'Producteur',
            ],
            [
                'film' => '9',
                'personne' => '9',
                'role' => 'Producteur',
            ],
            [
                'film' => '10',
                'personne' => '19',
                'role' => 'Producteur',
            ],
            [
                'film' => '1',
                'personne' => '20',
                'role' => 'Ellis Boyd red redding',
            ],
            [
                'film' => '2',
                'personne' => '21',
                'role' => 'Sonny Corleone',
            ],
            [
                'film' => '3',
                'personne' => '22',
                'role' => 'Jules Winnfield',
            ],
            [
                'film' => '4',
                'personne' => '23',
                'role' => 'Maximus',
            ],
            [
                'film' => '5',
                'personne' => '24',
                'role' => 'Neo',
            ],
            [
                'film' => '6',
                'personne' => '25',
                'role' => 'Mark Zuckerberg',
            ],
            [
                'film' => '7',
                'personne' => '26',
                'role' => 'Cooper',
            ],
            [
                'film' => '8',
                'personne' => '27',
                'role' => 'Grant',
            ],
            [
                'film' => '9',
                'personne' => '28',
                'role' => 'Jake Sully',
            ],
            [
                'film' => '10',
                'personne' => '29',
                'role' => 'Tony Stark',
            ],

        ]);
    }
}
