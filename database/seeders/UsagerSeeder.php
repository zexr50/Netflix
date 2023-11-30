<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
            [
                'nomUsager'=>'admin',
                'password' => Hash::make('admin'),
                'email'=>'admin@outlook.ca',
                'prenom'=>'Ad',
                'nom'=>'Min',
                'role'=>'admin'
            ],
            ]);
    }
}
