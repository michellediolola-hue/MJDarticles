<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Author;
use App\Models\Comment;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            ['name' => 'John Grace', 'email' => 'john@example.com'],
            ['name' => 'Sophia Rivers', 'email' => 'sophia@example.com'],
            ['name' => 'Ethan Wells', 'email' => 'ethan@example.com'],
        ];

        foreach ($authors as $authorData) {
            $author = Author::firstOrCreate(['email' => $authorData['email']], ['name' => $authorData['name']]);

            $articles = [
                [
                    'title' => 'Finding Peace in a Busy World',
                    'content' => 'In a world that never stops moving, true peace begins when we pause to listen to our heart and trust in something greater than ourselves.',
                ],
                [
                    'title' => 'Faith Over Fear',
                    'content' => 'Fear limits our potential, but faith gives us the courage to step into the unknown with confidence and purpose.',
                ],
                [
                    'title' => 'The Power of Positive Thinking',
                    'content' => 'Our thoughts shape our reality. By focusing on gratitude and optimism, we can transform our daily lives.',
                ],
            ];

            foreach ($articles as $articleData) {
                $article = Article::create([
                    'title' => $articleData['title'],
                    'content' => $articleData['content'],
                    'author_id' => $author->id,
                ]);

                Comment::create([
                    'article_id' => $article->id,
                    'author_name' => 'Emily',
                    'content' => 'Beautifully written and very inspiring!',
                ]);

                Comment::create([
                    'article_id' => $article->id,
                    'author_name' => 'Michael',
                    'content' => 'This really made me think differently about life. Thank you.',
                ]);
            }
        }
    }
}
