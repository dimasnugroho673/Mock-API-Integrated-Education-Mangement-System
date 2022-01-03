<?php

namespace Database\Seeders;

use App\Models\CourseSession;
use Illuminate\Database\Seeder;

class CourseSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseSession::insert([
            [
                "courseSessionID" => "018762394872346231",
                "idCourse" => "8762394872346231",
                // "idLecture" => "3",
                "idRoom" => "1102",
                "courseSchedule" => "Senin 07.30-09.00 WIB",
                "courseScheduleStart" => "40",
                "courseScheduleEnd" => "43",
                "courseCapacity" => "32"
            ],
            [
                "courseSessionID" => "028762394872346231",
                "idCourse" => "8762394872346231",
                // "idLecture" => "4",
                "idRoom" => "1102",
                "courseSchedule" => "Senin 09.00-11.00 WIB",
                "courseScheduleStart" => "41",
                "courseScheduleEnd" => "44",
                "courseCapacity" => "32"
            ],
            [
                "courseSessionID" => "018762394872346232",
                "idCourse" => "8762394872346232",
                // "idLecture" => "1",
                "idRoom" => "1101",
                "courseSchedule" => "Jumat 07.30-09.00 WIB",
                "courseScheduleStart" => "65",
                "courseScheduleEnd" => "69",
                "courseCapacity" => "32"
            ],
            [
                "courseSessionID" => "028762394872346232",
                "idCourse" => "8762394872346232",
                // "idLecture" => "2",
                "idRoom" => "1101",
                "courseSchedule" => "Jumat 09.00-11.00 WIB",
                "courseScheduleStart" => "68",
                "courseScheduleEnd" => "72",
                "courseCapacity" => "32"
            ]

        ]);

        // CourseSession::insert([

        // ]);
    }
}
