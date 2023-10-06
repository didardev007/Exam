<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Register>
 */
class RegisterFactory extends Factory
{
    public function definition(): array
    {
        $classroom = DB::table('classrooms')->inRandomOrder()->first();
        $course = DB::table('courses')->inRandomOrder()->first();
        $student = DB::table('students')->inRandomOrder()->first();
        return [
            'classroom_id' => $classroom->id,
            'course_id' => $course->id,
            'student_id' => $student->id,
        ];
    }
}
