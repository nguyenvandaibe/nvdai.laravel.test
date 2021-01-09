<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'This is first title.',
            'content' => 'This is first content.',
        ]);
        Article::create([
            'title' => 'This is second title.',
            'content' => 'This is second content.',
        ]);
    }
}
