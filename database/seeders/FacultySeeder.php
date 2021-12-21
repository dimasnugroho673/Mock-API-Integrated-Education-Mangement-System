<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faculty::insert([
            [
                "facultyName" => "Teknik",
                "facultyCode" => "FT"
            ],
            [
                "facultyName" => "Ekonomi",
                "facultyCode" => "FE"
            ],
            [
                "facultyName" => "Pendidikan",
                "facultyCode" => "FKIP"
            ],
            [
                "facultyName" => "Ilmu Sosial Politik",
                "facultyCode" => "FISIP"
            ]
        ]);
    }
}
