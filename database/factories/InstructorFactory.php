<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryIDs =DB::table('categories')->pluck('id');

        return [
            "instructor_name"=>fake()->name(),
            "job"=>fake()->name(),
            "experience"=>fake()->numberBetween(1,10)."years",
            "image"=>fake()->imageUrl(640, 480, 'instructor', true),
            "category_id"=>fake()->randomElement($categoryIDs),

        ];
    }
}
