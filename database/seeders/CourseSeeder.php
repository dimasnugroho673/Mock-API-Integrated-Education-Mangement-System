<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            [
                "courseID" => "8762394872346231",
                "courseCode" => "INF31001",
                "courseTitle" => "Basis Data",
                "courseCredits" => "3",
                "courseType" => "study program",
                "idDepartment" => "1"
            ],
            [
                "courseID" => "8762394872346232",
                "courseCode" => "INF31002",
                "courseTitle" => "Pemrograman Web",
                "courseCredits" => "4",
                "courseType" => "study program",
                "idDepartment" => "1"
            ],
        ]);
    }
}
