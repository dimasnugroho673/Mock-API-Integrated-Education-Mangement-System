<?php

namespace Database\Seeders;

use App\Models\Lecture;
use Illuminate\Database\Seeder;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lecture::insert([
            [
                "lectureID" => "001",
                "lectureName" => "Zul Kennedy PZN"
            ],
            [
                "lectureID" => "002",
                "lectureName" => "Ano P.L"
            ],
            [
                "lectureID" => "003",
                "lectureName" => "Sandika Galah"
            ],
            [
                "lectureID" => "004",
                "lectureName" => "M. Ikhsanudian"
            ]
        ]);
    }
}
