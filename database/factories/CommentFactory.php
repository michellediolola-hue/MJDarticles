<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'article_id' => 1, // or use an actual article ID dynamically
            'author_name' => $this->faker->name(),
            'content' => $this->faker->paragraph(),
        ];
    }
}

