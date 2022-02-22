<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                "name_url" => "default.png",
                "type" => "avatar_default",
                "created_at" => now()
            ],
            [
                "name_url" => "avatar_1.png",
                "type" => "avatar_1",
                "created_at" => now()
            ],
            [
                "name_url" => "avatar_2.png",
                "type" => "avatar_2",
                "created_at" => now()
            ],
            [
                "name_url" => "avatar_3.png",
                "type" => "avatar_3",
                "created_at" => now()
            ],
        ]);
    }
}
