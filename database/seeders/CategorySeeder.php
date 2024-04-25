<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Course;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->has(Course::factory()->count(5))->count(8)->create();
    }
}
