<?php

namespace Database\Seeders;

use App\Models\LabTool;
use Illuminate\Database\Seeder;

class LabToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LabTool::insert([
            [
                "toolName" => "Router Mikrotik",
                "toolType" => "Network",
                "stocks" => 5
            ],
            [
                "toolName" => "Tang Crimping",
                "toolType" => "Network",
                "stocks" => 8
            ],
            [
                "toolName" => "Wacom Pen Tab",
                "toolType" => "Design",
                "stocks" => 2
            ]
        ]);
    }
}
