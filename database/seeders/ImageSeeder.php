<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                "name_url" => "Marvel_Logo.png",
                "title" => "Marvel Logo",
                "categorie_id" => "1",
                "created_at" => now()
            ],
            [
                "name_url" => "dc_logo.jpg",
                "title" => "Comics Logo",
                "categorie_id" => "2",
                "created_at" => now()
            ],
            [
                "name_url" => "dev_logo.jpg",
                "title" => "Dev Logo",
                "categorie_id" => "3",
                "created_at" => now()
            ],
        ]);
    }
}
