<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
            [
                'id' => '1',
                'nom' => 'Frank Darabont',
                'dateNaissance' => '1959-01-28',
                'LieuNaissance' => 'Montbéliard, France',
                'photo' => 'Frank Darabont',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '2',
                'nom' => 'Francis Ford Coppola',
                'dateNaissance' => '1939-04-07',
                'LieuNaissance' => 'Detroit, Michigan, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.a1HR6NEdo-oJXA0DR_bfNAHaE8?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '3',
                'nom' => 'Quentin Tarantino',
                'dateNaissance' => '1963-03-27',
                'LieuNaissance' => 'Knoxville, Tennessee, USA',
                'photo' => 'https://www.indiewire.com/wp-content/uploads/2019/07/shutterstock_10248532cm-2.jpg',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '4',
                'nom' => 'Ridley Scott',
                'dateNaissance' => '1937-11-30',
                'LieuNaissance' => 'South Shields, County Durham, England',
                'photo' => 'https://i0.wp.com/www.seenit.co.uk/wp-content/uploads/RIDLEY-SCOTT_-Council-_Contour_Getty-Images.jpg?resize=2000%2C3000',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '5',
                'nom' => 'Lana Wachowski',
                'dateNaissance' => '1965-06-21',
                'LieuNaissance' => 'Chicago, Illinois, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.bptq_2tZBcpZoV4PlWuUDwAAAA?pid=ImgDet&w=394&h=500&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '6',
                'nom' => 'David Fincher',
                'dateNaissance' => '1962-08-28',
                'LieuNaissance' => 'Denver, Colorado, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.t6vjYMIV73AP7G3NE8XCzwHaFE?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '7',
                'nom' => 'Christopher Nolan',
                'dateNaissance' => '1970-07-30',
                'LieuNaissance' => 'London, England',
                'photo' => 'https://th.bing.com/th/id/R.33fd9318b39a0ba141800a0e1b52c3b6?rik=SZGixEeHlAotXg&pid=ImgRaw&r=0',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '8',
                'nom' => 'Steven Spielberg',
                'dateNaissance' => '1946-12-18',
                'LieuNaissance' => 'Cincinnati, Ohio, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.j75_ZZKp3kV3guLN1ZJ_mQHaFj?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '9',
                'nom' => 'James Cameron',
                'dateNaissance' => '1954-08-16',
                'LieuNaissance' => 'Kapuskasing, Ontario, Canada',
                'photo' => 'https://th.bing.com/th/id/OIP.j6zFaofT3XKLNFX2VfhqlgHaE8?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '10',
                'nom' => 'Joss Whedon',
                'dateNaissance' => '1964-06-23',
                'LieuNaissance' => 'New York City, New York, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.lC8GhjNIFHrdVY7lREGFHQHaFc?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '11',
                'nom' => 'Niki Marvin',
                'dateNaissance' => '0001-01-01',//INCONNU
                'LieuNaissance' => 'Inconnu',
                'photo' => 'https://th.bing.com/th/id/OIP.bICzlt9162wIvo1CsY1qjAAAAA?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '12',
                'nom' => 'Albert S. Ruddy',
                'dateNaissance' => '1930-03-28',
                'LieuNaissance' => 'Montreal, Quebec, Canada',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTkwNzY5NjQwMF5BMl5BanBnXkFtZTgwNTUzNzMwMzI@._V1_.jpg',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '13',
                'nom' => 'Lawrence Bender',
                'dateNaissance' => '1957-10-17',
                'LieuNaissance' => 'New York City, New York, USA.',
                'photo' => 'https://umaine.edu/news/wp-content/uploads/sites/3/2013/04/LB-Cannes-09-headshot.jpg',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '14',
                'nom' => 'Douglas Wick',
                'dateNaissance' => '1954-04-22',
                'LieuNaissance' => 'Milwaukee, Wisconsin, USA',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BNzM4ODE4MTQ1MV5BMl5BanBnXkFtZTYwODgyNzc0._V1_UY1200_CR100,0,630,1200_AL_.jpg',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '15',
                'nom' => 'Joel Silver',
                'dateNaissance' => '1952-07-14',
                'LieuNaissance' => 'South Orange, New Jersey, USA',
                'photo' => 'https://www.ecranlarge.com/uploads/image/000/963/9buslppiaeqytrdzvrsxaivld04-582.jpg',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '16',
                'nom' => 'Scott Rudin',
                'dateNaissance' => '1958-07-14',
                'LieuNaissance' => 'Baldwin, New York, USA',
                'photo' => 'https://th.bing.com/th/id/R.0f7c39e3f6cf7e23f2e21c76a2eb1be7?rik=%2fU6vWMfPZCBQAQ&pid=ImgRaw&r=0',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '17',
                'nom' => 'Emma Thomas',
                'dateNaissance' => '1971-12-05',
                'LieuNaissance' => 'Paris, Frances',
                'photo' => 'https://images.mubicdn.net/images/cast_member/23570/cache-210141-1489998682/image-w856.jpg',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '18',
                'nom' => 'Kathleen Kennedy',
                'dateNaissance' => '1953-06-05',
                'LieuNaissance' => 'Berkeley, California, USA',
                'photo' => 'https://vignette.wikia.nocookie.net/jurassicpark/images/7/7d/Kathleen_Kennedy.jpg/revision/latest?cb=20160424222258',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '19',
                'nom' => 'Kevin Feige',
                'dateNaissance' => '1973-06-02',
                'LieuNaissance' => 'Boston, Massachusetts, USA',
                'photo' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMzU4NDY5Mzk3MV5BMl5BanBnXkFtZTgwNzMyMTY1MDE@._V1_.jpg',
                'rolePrincipal' => 'Producteur',
            ],
            [ 
                'id' => '20', 
                'nom' => 'Morgan Freeman',
                'dateNaissance' => '1937-06-1',
                'LieuNaissance' => 'Tennesee, Memphis, USA',
                'photo' => 'https://th.bing.com/th/id/R.94783f97f03a61b900e11def6f67be07?rik=NLINAhxaQEE7jQ&pid=ImgRaw&r=0',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '21',
                'nom' => 'James Caan',
                'dateNaissance' => '1940-03-26',
                'LieuNaissance' => 'New York, Bronx, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.VhLal4at0YdkJADfmcuMQQHaLH?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '22',
                'nom' => 'Samuel L. Jackson',
                'dateNaissance' => '1948-12-21',
                'LieuNaissance' => 'Virginia, Washington DC, USA',
                'photo' => 'https://image.tmdb.org/t/p/original/ioAvaWLQJb4j5VyGmTdb2EOkP4r.jpg',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '23',
                'nom' => 'Russel Crowe',
                'dateNaissance' => '1964-04-07',
                'LieuNaissance' => 'Wellington, Wellington, New Zealand',
                'photo' => 'https://th.bing.com/th/id/OIP.gKekMSBbvy9nrNaAGMPcQAHaLH?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '24',
                'nom' => 'Keanu Reeves',
                'dateNaissance' => '1964-07-02',
                'LieuNaissance' => 'Gouvernorat Du Mont liban, Beyrouth, Liban',
                'photo' => 'https://image.tmdb.org/t/p/original/1wpzvf5PaQ1AZjl5rPNjWQobLLP.jpg',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '25',
                'nom' => 'Jesse Eisenberg',
                'dateNaissance' => '1983-10-05',
                'LieuNaissance' => 'New York, Queens, USA',
                'photo' => 'https://4.bp.blogspot.com/-MkhZQ-HGEV8/TeUO7wjF_AI/AAAAAAAAFhU/YmMm3tn54lQ/s1600/Jesse%2BEisenberg%2Bbiography.jpg',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '26',
                'nom' => 'Matthew McConaughey',
                'dateNaissance' => '1969-11-04',
                'LieuNaissance' => 'Texas, Uvalde, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.hoe2XhlzQTx-XO1-wokSTwHaLe?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '27',
                'nom' => 'Sam Neill',
                'dateNaissance' => '1947-09-14',
                'LieuNaissance' => 'County Tyrone, Omagh, Ireland',
                'photo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Sam_Neill_2022_%28cropped%29.jpg/800px-Sam_Neill_2022_%28cropped%29.jpg',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '28',
                'nom' => 'Sam Worthington',
                'dateNaissance' => '1976-08-02',
                'LieuNaissance' => 'Godalming, Surrey, England',
                'photo' => 'https://th.bing.com/th/id/OIP.zUMvn_xMeiHchbi62fgPOAHaLH?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Acteur',
            ],
            [ 
                'id' => '29',
                'nom' => 'Robert Downey Jr.',
                'dateNaissance' => '1965-04-04',
                'LieuNaissance' => 'New York, New York, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.IH-2DHjn6p1zVseoNu9maAHaKH?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Acteur',
            ],
            

        ]);
    }
}
