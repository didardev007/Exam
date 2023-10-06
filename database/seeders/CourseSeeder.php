<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            'Programing',
            'Web design',
            'Web programming',
            'Back-end development',
            'Front-end development',
        ];

        foreach ($courses as $course) {
            $obj = new Course();
            $obj->name = $course;
            $obj->save();
        }
    }
}
