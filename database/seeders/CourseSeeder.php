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
        // $table->string('courseCode');
        // $table->string('courseTitle');
        // $table->string('courseScope');
        // $table->string('courseType');
        // $table->string('courseCredits');
        // $table->string("semester");
        // $table->string('semesterType');
        // $table->string('idDepartment');
        // $table->string('idCourseGradeComponents')->nullable();
        // $table->string('idAcademicYear');
        Course::insert([
            [
                "courseID" => "8762394872346231",
                "courseCode" => "INF31001",
                "courseTitle" => "Basis Data",
                "courseCredits" => "3",
                "courseType" => "mandatory",
                "courseScope" => "study program",
                "semester" => "5",
                "semesterType" => "odd",
                "idDepartment" => "1",
                "idAcademicYear" => "1238"
            ],
            [
                "courseID" => "8762394872346232",
                "courseCode" => "INF31002",
                "courseTitle" => "Pemrograman Web",
                "courseCredits" => "4",
                "courseType" => "mandatory",
                "courseScope" => "study program",
                "semester" => "4",
                "semesterType" => "even",
                "idDepartment" => "1",
                "idAcademicYear" => "1238"
            ],
        ]);
    }
}
