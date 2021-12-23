<?php

namespace Database\Seeders;

use App\Models\LibBook;
use Illuminate\Database\Seeder;

class LibBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LibBook::insert([
            [
                "bookCode" => "RPL001",
                "bookTitle" => "Menjadi Android Developer Expert",
                "bookPublisher" => "Dicoding Academy",
                "publicationYear" => "2018",
                "stocks" => 2
            ],
            [
                "bookCode" => "RPL002",
                "bookTitle" => "Menjadi Web Developer Expert",
                "bookPublisher" => "Dicoding Academy",
                "publicationYear" => "2019",
                "stocks" => 1
            ],       
        ]);
    }
}
