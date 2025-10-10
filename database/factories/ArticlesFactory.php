<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
Use Illuminate\Database\Eloquent\Fatories\Factory;


class ArticleFactory extends Factory
{
    protected $model = Article::class;
    
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(),
            'published' =>fake()->boolean(),
            'author_id' => fake()->numberBetween(1-10)    
            ];
        }
    }       
   
