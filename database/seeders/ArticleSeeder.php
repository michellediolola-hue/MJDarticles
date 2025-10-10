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
        $author = Author::firstOrCreate(
            ['email' => 'john@example.com'],
            ['name' => 'John Grace']
        );

        $articles = [
            [
                'title' => 'Finding Peace in a Busy World',
                'content' => 'In the rush of modern life, peace is not found in noise or success, but in stillness and gratitude. Learn to breathe and appreciate quiet moments.',
            ],
            [
                'title' => 'Faith Beyond Fear',
                'content' => 'True faith is not the absence of fear but the courage to trust despite it. When we walk by faith, we see light even in uncertainty.',
            ],
            [
                'title' => 'The Power of a Positive Mind',
                'content' => 'Our thoughts shape our reality. Choosing kindness, gratitude, and optimism helps us build strength and joy even during challenges.',
            ],
            [
                'title' => 'Letting Go and Moving Forward',
                'content' => 'Healing begins when we let go of resentment and make peace with our past. Growth starts in acceptance and forgiveness.',
            ],
        ];

        foreach ($articles as $articleData) {
            $article = Article::create([
                'author_id' => $author->id,
                'title' => $articleData['title'],
                'content' => $articleData['content'],
            ]);

            Comment::create([
                'article_id' => $article->id,
                'author_name' => 'Reader',
                'content' => 'This article gave me something to think about today. Thank you!',
            ]);
        }
    }
}
