<?php

namespace Database\Seeders;

use App\Models\LibBookLoan;
use Illuminate\Database\Seeder;

class LibBookLoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LibBookLoan::insert([
            [
                "idUser" => "170155201031",
                "idLibBook" => "1",
                "date" => "2021-10-05 09:30:00",
                "deadline" => "2021-12-29 09:30:00"
            ],
            [
                "idUser" => "170155201031",
                "idLibBook" => "2",
                "date" => "2021-10-05 09:30:00",
                "deadline" => "2021-12-29 09:30:00"
            ],
            [
                "idUser" => "170155201005",
                "idLibBook" => "1",
                "date" => "2021-10-07 09:30:00",
                "deadline" => "2021-12-29 09:30:00"
            ],
        ]);
    }
}
