<?php

namespace Database\Seeders;

use App\Models\LabToolLoan;
use Illuminate\Database\Seeder;

class LabToolLoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LabToolLoan::insert([
            [
                "idUser" => "170155201031",
                "idLabTool" => "1",
                "date" => "2021-10-05 09:30:00",
                "deadline" => "2021-12-29 09:30:00"
            ],
        ]);
    }
}
