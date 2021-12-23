<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                "userID" => "170155201005",
                "name" => "Dimas Nugroho Putro",
                "email" => "dimasnugroho673@gmail.com",
                "nim" => "170155201005",
                "password" => bcrypt("123456"),
                'api_token' => "UZ9hYZtMrVndCkPxWVksOyox",
            ],
            [
                "userID" => "170155201031",
                "name" => "M. Wahyu Irgan Agustino",
                "email" => "wahyuirgan12@gmail.com",
                "nim" => "170155201031",
                "password" => bcrypt("123456"),
                'api_token' => "mfbAazWfjgJeqNqIBlRTTQ==",
            ],
            [
                "userID" => "170155201013",
                "name" => "Sulthan SHP",
                "email" => "sulthan.shp.13@gmail.com",
                "nim" => "170155201031",
                "password" => bcrypt("123456"),
                'api_token' => "REbdazWfjgJeyrtIBlRTTQ",
            ],
        ]);
    }
}
