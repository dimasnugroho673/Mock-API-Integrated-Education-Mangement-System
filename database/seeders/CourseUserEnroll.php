<?php

namespace Database\Seeders;

use App\Models\CourseUserEnroll as ModelsCourseUserEnroll;
use Illuminate\Database\Seeder;

class CourseUserEnroll extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsCourseUserEnroll::insert([
            [
                "idUser" => "170155201005",
                "idCourse" => "8762394872346232",
                "idSession" => "018762394872346232"
            ]
        ]);
    }
}
