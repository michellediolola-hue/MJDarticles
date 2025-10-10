<?php

namespace Database\Factories;

use App\Models\Article;
Use Illuminate\Database\Eloquent\Fatories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;
    
        public function definition(): array
        {
            return [
                'author_id' => // or ->randomDigitNotZero()
                // add more fields like 'title', => $this->faker->sentence(),
            ];
        }
    }       
   
