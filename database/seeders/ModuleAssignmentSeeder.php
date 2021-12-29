<?php

namespace Database\Seeders;

use App\Models\ModuleAssignment;
use Illuminate\Database\Seeder;

class ModuleAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModuleAssignment::insert([
            [
                "idModule" => "098123907123",
                "assignedDate" => "2021-12-21 07:30:00",
                "deadlineDate" => "2021-12-30 23:59:00",
                "descriptions" => '<p><strong>Silahkan tonton video berikut:</strong><br /><a href="https://www.youtube.com/watch?app=desktop&amp;v=lkx0D6Suf1s" target="_blank">https://www.youtube.com/watch?app=desktop&amp;v=lkx0D6Suf1s</a></p>
                    <p>Saran: Pada video tersebut terdapat link kumpulan kode program. Jika tidak mau menghabiskan kuota dan bingung mendengarkan video, silahkan kunjungi link tersebut, dan cari sendiri informasi-informasi tentang masalah pada pemrograman CORBA. <br /><a href="https://github.com/akmalzz/DC_Assignments" target="_blank">https://github.com/akmalzz/DC_Assignments</a></p>
                    <p>Silahkan <strong>capture</strong> <strong>desktop</strong> hasil percobaan anda dengan menyertakan tanggal dan jam pada taskbar, dan kumpulkan pada tugas ini!</p>',
                "extensions" => '
                            [
                                "zip", "pdf"
                            ]'
            ]
        ]);
    }
}
