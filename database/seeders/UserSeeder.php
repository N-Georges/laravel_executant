<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "admin", 
                "lastName" => "adm", 
                "age" => 23, 
                "email" => "admin@gmail.com",
                "password" => Hash::make('rootroot'),
                "role_id" => 1,
                "avatar_id" => 2,
                "created_at" => now()
            ],
            [
                "name" => "user", 
                "lastName" => "usr", 
                "age" => 28, 
                "email" => "user@gmail.com",
                "password" => Hash::make('rootroot'),
                "role_id" => 2,
                "avatar_id" => 2,
                "created_at" => now()
            ],
            [
                "name" => "webmaster", 
                "lastName" => "wbm", 
                "age" => 45, 
                "email" => "webmaster@gmail.com",
                "password" => Hash::make('rootroot'),
                "role_id" => 3,
                "avatar_id" => 3,
                "created_at" => now()
            ]
        ]);
    }
}
