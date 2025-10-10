<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Author;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // First, create some authors
        Author::factory(5)->create()->each(function ($author) {
            // For each author, create articles
            $articles = Article::factory(3)->create([
                'author_id' => $author->id,
            ]);

            // For each article, create comments
            $articles->each(function ($article) {
                Comment::factory(2)->create([
                    'article_id' => $article->id,
                ]);
            });
        });
    }
}

      
   