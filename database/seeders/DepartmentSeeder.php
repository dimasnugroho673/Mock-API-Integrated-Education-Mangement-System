<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::insert([
            [
                "idFaculty" => "1",
                "departmentName" => "Informatika",
                "departmentCode" => "INF"
            ],
            [
                "idFaculty" => "1",
                "departmentName" => "Elektro",
                "departmentCode" => "ELT"
            ]
        ]);
    }
}
