<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            RoomSeeder::class,
            FacultySeeder::class,
            DepartmentSeeder::class,
            CourseSeeder::class,
            CourseSessionSeeder::class,
            LectureSeeder::class,
            CourseUserEnroll::class,
            CourseModuleSeeder::class,
            ModuleAssignmentSeeder::class,
            ModuleQuizSeeder::class,
            ModuleMaterialSeeder::class,
            LibBookSeeder::class,
            LabToolSeeder::class,
            LibBookLoanSeeder::class,
            LabToolLoanSeeder::class,
            AcademicYearSeeder::class,
            CourseLectureEnrollSeeder::class
        ]);
    }
}
