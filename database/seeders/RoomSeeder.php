<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::insert([
            [
                "roomID" => "1101",
                "roomName" => "Ruang 1"
            ],
            [
                "roomID" => "1102",
                "roomName" => "Ruang 2"
            ],
        ]);
    }
}
