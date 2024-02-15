<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LivresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i =  0; $i <  10; $i++) {
            DB::table('livres')->insert([
                'titre' => Str::random(10),
                'annee_de_publication' => rand(1900,  2023),
                'nombre_de_pages' => rand(100,  500),
                'auteur_id' => rand(1,  50),
            ]);
        }
    }
}
