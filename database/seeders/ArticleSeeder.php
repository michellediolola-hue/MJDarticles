<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Article;
use App\Models\Comment;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        // Create some authors
        $authors = [
            ['name' => 'John Grace', 'email' => 'john@example.com'],
            ['name' => 'Emily Faith', 'email' => 'emily@example.com'],
            ['name' => 'Liam Hope', 'email' => 'liam@example.com'],
        ];

        foreach ($authors as $data) {
            Author::firstOrCreate(['email' => $data['email']], $data);
        }

        // Create articles about life, faith, and mentality
        $articles = [
            [
                'author_id' => 1,
                'title' => 'Finding Peace in Simplicity',
                'content' => 'True peace is found when we stop chasing everything and start appreciating what we already have. Simplicity teaches gratitude, focus, and inner strength.',
            ],
            [
                'author_id' => 2,
                'title' => 'Faith Over Fear',
                'content' => 'Faith is not about ignoring fear, but moving forward in spite of it. When you trust the process, even uncertainty becomes a teacher.',
            ],
            [
                'author_id' => 3,
                'title' => 'A Calm Mind is a Strong Mind',
                'content' => 'Your mindset shapes your world. Learn to breathe, pause, and respond with clarity — not reaction. Calmness is power.',
            ],
        ];

        foreach ($articles as $data) {
            $article = Article::firstOrCreate(['title' => $data['title']], $data);

            // Add some comments
            Comment::create([
                'article_id' => $article->id,
                'author_name' => 'Reader1',
                'content' => 'This really spoke to me. Thank you for sharing!',
            ]);

            Comment::create([
                'article_id' => $article->id,
                'author_name' => 'Mia',
                'content' => 'Beautiful words — I needed this reminder today.',
            ]);
        }
    }
}
