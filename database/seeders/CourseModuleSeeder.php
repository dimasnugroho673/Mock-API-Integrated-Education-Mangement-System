<?php

namespace Database\Seeders;

use App\Models\CourseModule;
use Illuminate\Database\Seeder;

class CourseModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseModule::insert([
            [
                "moduleID" => "098123907121",
                "idCourse" => "8762394872346232",
                "idSession" => "018762394872346232",
                "moduleTitle" => "Kontrak Perkuliahan",
                "moduleType" => "material",
                "isActive" => true
            ],
            [
                "moduleID" => "098123907122",
                "idCourse" => "8762394872346232",
                "idSession" => "018762394872346232",
                "moduleTitle" => "Pengenalan Web",
                "moduleType" => "material",
                "isActive" => true
            ],
            [
                "moduleID" => "098123907123",
                "idCourse" => "8762394872346232",
                "idSession" => "018762394872346232",
                "moduleTitle" => "Tugas 1",
                "moduleType" => "assignment",
                "isActive" => true
            ],
            [
                "moduleID" => "098123907124",
                "idCourse" => "8762394872346232",
                "idSession" => "018762394872346232",
                "moduleTitle" => "Kuis 1",
                "moduleType" => "quiz",
                "isActive" => false
            ],
        ]);
    }
}
