<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create(['title' => 'Curso de HTML', 'description' => 'Aprende los fundamentos de HTML', 'price' => 99.99]);
        Course::create(['title' => 'Curso de CSS', 'description' => 'Domina el diseño web con CSS', 'price' => 79.99]);
    }
}
