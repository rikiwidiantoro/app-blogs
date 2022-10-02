<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3,6)),
            'content' => $this->faker->paragraph(mt_rand(2,4)),
            'image' => $this->faker->word().'.jpg',
            'category_id' => mt_rand(1,3)
        ];
    }
}
