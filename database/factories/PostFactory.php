<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'category_id' => rand(1, 3),
            'user_id' => rand(1, 10),
            'excerpt' => fake()->sentence(20),
            'content' => fake()->paragraph(20),

        ];
    }
}
