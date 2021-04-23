<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'title' => 'Cheese',
            'description' => 'Made from Cows Milk'
        ]);
        DB::table('posts')->insert([
            'title' => 'Uratex Foam',
            'description' => 'Ingredients Foam, Water, Salt'
        ]);
        DB::table('posts')->insert([
            'title' => 'Smartphone',
            'description' => 'Support Local'
        ]);
    }
}
