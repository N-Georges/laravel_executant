<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "categorie" => "marvel",
                "created_at" => now()
            ],
            [
                "categorie" => "comics",
                "created_at" => now()
            ],
            [
                "categorie" => "dev",
                "created_at" => now()
            ],
        ]);
    }
}
