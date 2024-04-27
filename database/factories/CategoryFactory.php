<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        return [
            "category_name"=>fake()->name(),
            "price"=>fake()->randomNumber(4, true),
            "duration"=>fake()->numberBetween(3,18 )."month",
            "image"=>fake()->image(null, 640, 480),
            "description"=>fake()->paragraph(),
        ];
    }
}
