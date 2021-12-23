<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseUserEnroll;

class CourseUserEnrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseUserEnroll::insert([
            [
                "idUser" => "170155201005",
                "idCourse" => "8762394872346232",
                "idSession" => "018762394872346232"
            ]
        ]);
    }
}
