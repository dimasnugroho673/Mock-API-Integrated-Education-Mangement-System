<?php

namespace Database\Seeders;

use App\Models\Notification;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->string('type');
        //     $table->string('title');
        Notification::insert([
            [
                "title" => "Peminjaman Buku",
                "type" => "Library"
            ],
            [
                "title" => "Peminjaman Alat",
                "type" => "Labs"
            ],
            [
                "title" => "Pengisian Rencana Studi",
                "type" => "General"
            ],
            [
                "title" => "Muhammad Radzi Rathomi memposting : Tugas 1",
                "type" => "ModuleAssignment"
            ],
            [
                "title" => "Muhammad Radzi Rathomi memposting : Kuis 4",
                "type" => "CourseQuiz"
            ]
        ]);
    }
}
