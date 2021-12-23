<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicYear::insert([
            [
                "academicYearID" => "1230",
                "year" => "Ganjil 2017/2018",
                "type" => "ganjil"
            ],
            [
                "academicYearID" => "1231",
                "year" => "Genap 2017/2018",
                "type" => "genap"
            ],
            [
                "academicYearID" => "1232",
                "year" => "Ganjil 2018/2019",
                "type" => "ganjil"
            ],
            [
                "academicYearID" => "1233",
                "year" => "Genap 2018/2019",
                "type" => "genap"
            ],
            [
                "academicYearID" => "1234",
                "year" => "Ganjil 2019/2020",
                "type" => "ganjil"
            ],
            [
                "academicYearID" => "1235",
                "year" => "Genap 2019/2020",
                "type" => "genap"
            ],
            [
                "academicYearID" => "1236",
                "year" => "Ganjil 2020/2021",
                "type" => "ganjil"
            ],
            [
                "academicYearID" => "1238",
                "year" => "Genap 2021/2022",
                "type" => "genap"
            ],
            [
                "academicYearID" => "1239",
                "year" => "Genap 2021/2022",
                "type" => "genap"
            ],
            
        ]);
    }
}
