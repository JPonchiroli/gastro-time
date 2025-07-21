<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author'        => fake()->name(),
            'review_date'   => fake()->date(),
            'review'        => fake()->numberBetween(1, 5),
            'comment'       => fake()->paragraph(1),
            'restaurant_id' => Restaurant::inRandomOrder()->first()->id,
        ];
    }
}
