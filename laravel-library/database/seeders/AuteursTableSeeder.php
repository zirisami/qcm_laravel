<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuteursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert example authors into the auteurs table
        DB::table('auteurs')->insert([
            ['nom' => 'Author One', 'prenom' => 'First'],
            ['nom' => 'Author Two', 'prenom' => 'Second'],
            // Add more authors as needed
        ]);
    }
}
