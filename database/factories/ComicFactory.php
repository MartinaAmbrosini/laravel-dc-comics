<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(3),
            'author_firstname' => fake()->firstName,
            'author_lastname' => fake()->lastName,
            'genre' => fake()->sentence(2),
            'date_of_publish' => fake()->dateTime(),
        ];
    }
}
