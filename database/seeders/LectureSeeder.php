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
                "lectureName" => "Zul Kennedy PZN"
            ],
            [
                "lectureName" => "Ano P.L"
            ],
            [
                "lectureName" => "Sandika Galah"
            ],
            [
                "lectureName" => "M. Ikhsanudian"
            ]
        ]);
    }
}
