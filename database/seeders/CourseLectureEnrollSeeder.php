<?php

namespace Database\Seeders;

use App\Models\CourseLectureEnroll;
use Illuminate\Database\Seeder;

class CourseLectureEnrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseLectureEnroll::insert([
            [
                "idLecture" => "001",
                "idCourse" => "8762394872346231",
                "idSession" => "018762394872346231",
                "isPrimaryLecture" => 1,
                "lectureDescriptions" => "Dosen Utama"
            ],
            [
                "idLecture" => "003",
                "idCourse" => "8762394872346231",
                "idSession" => "018762394872346231",
                "isPrimaryLecture" => 0,
                "lectureDescriptions" => "Dosen Cadangan"
            ],
            [
                "idLecture" => "003",
                "idCourse" => "8762394872346232",
                "idSession" => "028762394872346231",
                "isPrimaryLecture" => 1,
                "lectureDescriptions" => "Dosen Utama"
            ],
            [
                "idLecture" => "004",
                "idCourse" => "8762394872346231",
                "idSession" => "028762394872346231",
                "isPrimaryLecture" => 0,
                "lectureDescriptions" => "Dosen Pindahan"
            ],
            [
                "idLecture" => "002",
                "idCourse" => "8762394872346232",
                "idSession" => "018762394872346232",
                "isPrimaryLecture" => 1,
                "lectureDescriptions" => "Dosen Utama"
            ],
            [
                "idLecture" => "002",
                "idCourse" => "8762394872346232",
                "idSession" => "028762394872346232",
                "isPrimaryLecture" => 1,
                "lectureDescriptions" => "Dosen Utama"
            ],
        ]);
    }
}
