<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'              => fake()->company(),
            'address'           => fake()->address(), 
            'type'              => fake()->randomElement(Restaurant::TYPES), 
            'maximum_capacity'  => fake()->numberBetween(1, 12), 
            'description'       => fake()->paragraph(10),
        ];
    }
}
