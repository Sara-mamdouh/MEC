<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Instructor;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instructor::factory()->count(6)->create();

    }
}
