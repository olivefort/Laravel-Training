<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ArticleTag::factory(200)->create();
    }
}

