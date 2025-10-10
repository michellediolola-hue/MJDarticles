<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'author_id' => Author::factory(), // or use a fixed ID if authors exist
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->paragraph(5),
        ];
    }
}
