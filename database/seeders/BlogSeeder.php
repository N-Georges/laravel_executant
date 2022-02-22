<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                "title" => "Marvel history",
                "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut non molestiae voluptatibus ex maxime atque a voluptatem possimus iusto eaque molestias reprehenderit, quia in error deleniti necessitatibus rem corrupti unde, aperiam accusamus earum? Commodi eos alias natus totam cumque aliquam magni itaque laudantium. Quibusdam itaque aperiam assumenda vitae autem!',
                "created_at" => now()
            ],
            [
                "title" => "Comics history",
                "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut non molestiae voluptatibus ex maxime atque a voluptatem possimus iusto eaque molestias reprehenderit, quia in error deleniti necessitatibus rem corrupti unde, aperiam accusamus earum? Commodi eos alias natus totam cumque aliquam magni itaque laudantium. Quibusdam itaque aperiam assumenda vitae autem!',
                "created_at" => now()
            ],
            [
                "title" => "Dev history",
                "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut non molestiae voluptatibus ex maxime atque a voluptatem possimus iusto eaque molestias reprehenderit, quia in error deleniti necessitatibus rem corrupti unde, aperiam accusamus earum? Commodi eos alias natus totam cumque aliquam magni itaque laudantium. Quibusdam itaque aperiam assumenda vitae autem!',
                "created_at" => now()
            ],
            [
                "title" => "New-york history",
                "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut non molestiae voluptatibus ex maxime atque a voluptatem possimus iusto eaque molestias reprehenderit, quia in error deleniti necessitatibus rem corrupti unde, aperiam accusamus earum? Commodi eos alias natus totam cumque aliquam magni itaque laudantium. Quibusdam itaque aperiam assumenda vitae autem!',
                "created_at" => now()
            ],
            [
                "title" => "Miami history",
                "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut non molestiae voluptatibus ex maxime atque a voluptatem possimus iusto eaque molestias reprehenderit, quia in error deleniti necessitatibus rem corrupti unde, aperiam accusamus earum? Commodi eos alias natus totam cumque aliquam magni itaque laudantium. Quibusdam itaque aperiam assumenda vitae autem!',
                "created_at" => now()
            ],
            [
                "title" => "L.A history",
                "description" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut non molestiae voluptatibus ex maxime atque a voluptatem possimus iusto eaque molestias reprehenderit, quia in error deleniti necessitatibus rem corrupti unde, aperiam accusamus earum? Commodi eos alias natus totam cumque aliquam magni itaque laudantium. Quibusdam itaque aperiam assumenda vitae autem!',
                "created_at" => now()
            ],
            
        ]);
    }
}
