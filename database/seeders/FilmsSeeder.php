<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('films')->insert([
            [
                'id' => '1',
                'titre' => 'The Shawshank Redemption',
                'resume' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'pochette' => 'https://th.bing.com/th/id/OIP.j9bxUofzBLpS1TLyH3RfogHaNr?pid=ImgDet&rs=1',
                'durée' => '2 heures et 22 minutes',
                'realisateur_id' => '1',
                'producteur_id' => '11',
                'année' => 1994,
                'lienVideo' => 'https://www.youtube.com/embed/NmzuHjWmXOc?si=KmxK5blGxW1guCmD',
                'type' => 'Drame',
                'brand' => 'Castle Rock Entertainment',
                'cote' => 91,
                'rating' => 16,
                'langues' => 'Anglais, Français, Espagnol, Allemand',
                'sousTitres' => 'Français, Anglais, Espagnol, Allemand',
            ],
            [
                'id' => '2',
                'titre' => 'The Godfather',
                'resume' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'pochette' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'durée' => '2 heures et 55 minutes',
                'realisateur_id' => '2',
                'producteur_id' => '12',
                'année' => 1972,
                'lienVideo' => 'https://www.youtube.com/embed/eZHsmb4ezEk?si=zhHlZtWYbKsfk5CO',
                'type' => 'Drame, Crime',
                'brand' => 'Paramount Pictures',
                'cote' => 98,
                'rating' => 16,
                'langues' => 'Anglais, Français, Espagnol, Italien',
                'sousTitres' => 'Français, Anglais, Espagnol, Italien',
            ],
            [
                'id' => '3',
                'titre' => 'Pulp Fiction',
                'resume' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'pochette' => 'https://www.themoviedb.org/t/p/original/pbWgQPC6l9pkpEpi3WNRSfWYNP6.jpg',
                'durée' => '2 heures et 34 minutes',
                'realisateur_id' => '3',
                'producteur_id' => '13',
                'année' => 1994,
                'lienVideo' => 'https://www.youtube.com/embed/LBBni_-tMNs?si=_RmlD8AJHkoGaLEM',
                'type' => 'Drame, Crime',
                'brand' => 'Miramax Films',
                'cote' => 92,
                'rating' => 16,
                'langues' => 'Anglais, Français, Espagnol, Allemand',
                'sousTitres' => 'Français, Anglais, Espagnol, Allemand',
            ],
            [
                'id' => '4',
                'titre' => 'Gladiator',
                'resume' => 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.',
                'pochette' => 'https://www.themoviedb.org/t/p/original/oJw0o7RLGspWNSG5IR1LQvBrusu.jpg',
                'durée' => '2 heures et 35 minutes',
                'realisateur_id' => '4',
                'producteur_id' => '14',
                'année' => 2000,
                'lienVideo' => 'https://www.youtube.com/embed/X1UmHfWCw-4?si=hDk-oI8Q51RV8Ye8',
                'type' => 'Action, Aventure, Drame',
                'brand' => 'DreamWorks Pictures',
                'cote' => 76,
                'rating' => 16,
                'langues' => 'Anglais, Français, Espagnol',
                'sousTitres' => 'Français, Anglais, Espagnol',
            ],
            [
                'id' => '5',
                'titre' => 'The Matrix',
                'resume' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'pochette' => 'https://image.tmdb.org/t/p/original/dXNAPwY7VrqMAo51EKhhCJfaGb5.jpg',
                'durée' => '2 heures et 16 minutes',
                'realisateur_id' => '5',
                'producteur_id' => '15',
                'année' => 1999,
                'lienVideo' => 'https://www.youtube.com/embed/Vb6bA4J1Gbg?si=-tKJw2ao-3SGYsG5',
                'type' => 'Action, Science-Fiction',
                'brand' => 'Warner Bros.',
                'cote' => 87,
                'rating' => 16,
                'langues' => 'Anglais, Français, Espagnol, Allemand',
                'sousTitres' => 'Français, Anglais, Espagnol, Allemand',
            ],
            [
                'id' => '6',
                'titre' => 'The Social Network',
                'resume' => 'Harvard student Mark Zuckerberg creates the social networking site that would become known as Facebook but is later sued by two brothers who claimed he stole their idea.',
                'pochette' => 'https://www.themoviedb.org/t/p/original/n0ybibhJtQ5icDqTp8eRytcIHJx.jpg',
                'durée' => '2 heures',
                'realisateur_id' => '6',
                'producteur_id' => '16',
                'année' => 2010,
                'lienVideo' => 'https://www.youtube.com/embed/lB95KLmpLR4?si=7YlWYddtvCoLTEaN',
                'type' => 'Biographie, Drame',
                'brand' => 'Columbia Pictures',
                'cote' => 95,
                'rating' => 12,
                'langues' => 'Anglais, Français, Espagnol, Allemand',
                'sousTitres' => 'Français, Anglais, Espagnol, Allemand',
            ],
            [
                'id' => '7',
                'titre' => 'Interstellar',
                'resume' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'pochette' => 'https://s3.amazonaws.com/nightjarprod/content/uploads/sites/130/2021/08/19085635/gEU2QniE6E77NI6lCU6MxlNBvIx-scaled.jpg',
                'durée' => '2 heures et 49 minutes',
                'realisateur_id' => '7',
                'producteur_id' => '17',
                'année' => 2014,
                'lienVideo' => 'https://www.youtube.com/embed/zSWdZVtXT7E?si=WS4PHGnLHmnSEtJf',
                'type' => 'Aventure, Science-Fiction',
                'brand' => 'Paramount Pictures',
                'cote' => 72,
                'rating' => 12,
                'langues' => 'Anglais, Français, Espagnol',
                'sousTitres' => 'Français, Anglais, Espagnol',
            ],
            [
                'id' => '8',
                'titre' => 'Jurassic Park',
                'resume' => 'During a preview tour, a theme park suffers a major power breakdown that allows its cloned dinosaur exhibits to run amok.',
                'pochette' => 'https://image.tmdb.org/t/p/original/3MSKv8P0jFTpgFD5mQGVktDrp3m.jpg',
                'durée' => '2 heures et 7 minutes',
                'realisateur_id' => '8',
                'producteur_id' => '18',
                'année' => 1993,
                'lienVideo' => 'https://www.youtube.com/embed/E8WaFvwtphY?si=juu-yD3JK6hMWeiG',
                'type' => 'Aventure, Science-Fiction',
                'brand' => 'Universal Pictures',
                'cote' => 91,
                'rating' => 12,
                'langues' => 'Anglais, Français, Espagnol',
                'sousTitres' => 'Français, Anglais, Espagnol',
            ],
            [
                'id' => '9',
                'titre' => 'Avatar',
                'resume' => 'A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.',
                'pochette' => 'https://cdna.artstation.com/p/assets/images/images/031/645/214/large/shreyas-raut-avatar-2.jpg?1604210989',
                'durée' => '2 heures et 42 minutes',
                'realisateur_id' => '9',
                'producteur_id' => '9',
                'année' => 2009,
                'lienVideo' => 'https://www.youtube.com/embed/5PSNL1qE6VY?si=N6BhbArdK-KrOzq7',
                'type' => 'Action, Aventure, Science-Fiction',
                'brand' => '20th Century Fox',
                'cote' => 83,
                'rating' => 12,
                'langues' => 'Anglais, Français, Espagnol',
                'sousTitres' => 'Français, Anglais, Espagnol',
            ],
            [
                'id' => '10',
                'titre' => 'The Avengers',
                'resume' => 'Earth\'s mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.',
                'pochette' => 'https://www.themoviedb.org/t/p/original/qMxAmzGQO722q0UlssCOPhrXmvX.jpg',
                'durée' => '2 heures et 23 minutes',
                'realisateur_id' => '10',
                'producteur_id' => '19',
                'année' => 2012,
                'lienVideo' => 'https://www.youtube.com/embed/eOrNdBpGMv8?si=iHiYBg1A59xuBJjl',
                'type' => 'Action, Aventure, Science-Fiction',
                'brand' => 'Marvel Studios',
                'cote' => 92,
                'rating' => 12,
                'langues' => 'Anglais, Français, Espagnol',
                'sousTitres' => 'Français, Anglais, Espagnol',
            ],
            [
                'id' => '11',
                'titre' => 'Inception',
                'resume' => 'A thief who enters people\'s dreams and steals their secrets must plant an idea into someone’s mind in order to return to his normal life.',
                'pochette' => 'https://image.tmdb.org/t/p/original/zSBVQIvx4UIHoFf1oDvixHyIQrz.jpg',
                'durée' => '2 heures et 28 minutes',
                'realisateur_id' => '7',
                'producteur_id' => '7',
                'année' => 2010,
                'lienVideo' => 'https://www.youtube.com/embed/YoHD9XEInc0?si=CiDQ_5WrPavYxL1p',
                'type' => 'Action, Aventure, Science-Fiction',
                'brand' => 'Warner Bros. Pictures',
                'cote' => 88,
                'rating' => 13,
                'langues' => 'Anglais, Français, Japonais',
                'sousTitres' => 'Français, Anglais, Espagnol',
            ]

        ]);
    }
}
