<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Article::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
