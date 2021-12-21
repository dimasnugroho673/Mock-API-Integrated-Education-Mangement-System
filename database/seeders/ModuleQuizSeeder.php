<?php

namespace Database\Seeders;

use App\Models\ModuleQuiz;
use Illuminate\Database\Seeder;

class ModuleQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModuleQuiz::insert([
            [
                "idModule" => "098123907124",
                "assignedDate" => "2021-12-20 07:30:00",
                "deadlineDate" => "2021-12-20 23:59:00",
                "durationLimit" => 1200000,
                "data" => '[
                    {
                        "number": 1,
                        "question": "Apa itu frontend dev?",
                        "answerKey": "e",
                        "answerOptions": [
                            {
                                "value": "a",
                                "label": "Ngetik ngetik surat"
                            },
                            {
                                "value": "b",
                                "label": "Gamers"
                            },
                            {
                                "value": "c",
                                "label": "Tukang service"
                            },
                            {
                                "value": "d",
                                "label": "Abang konter"
                            },
                            {
                                "value": "e",
                                "label": "Orang yang mengerjakan bagian depan sistem yang dilihat oleh user"
                            }
                        ]
                    },
                    {
                        "number": 2,
                        "question": "Apa itu backend dev?",
                        "answerKey": "a",
                        "answerOptions": [
                            {
                                "value": "a",
                                "label": "Orang yang mengerjakan bagian belakang sistem yang tidak terlihat oleh user"
                            },
                            {
                                "value": "b",
                                "label": "Heker"
                            },
                            {
                                "value": "c",
                                "label": "Gamers"
                            },
                            {
                                "value": "d",
                                "label": "Abang konter"
                            },
                            {
                                "value": "e",
                                "label": "Orang gabut"
                            }
                        ]
                    },
                    {
                        "number": 3,
                        "question": "Apa itu fullstack dev?",
                        "answerKey": "c",
                        "answerOptions": [
                            {
                                "value": "a",
                                "label": "Orang yang mengerjakan ketimpa"
                            },
                            {
                                "value": "b",
                                "label": "Kuli"
                            },
                            {
                                "value": "c",
                                "label": "Orang yang dapat mengemban seluruh tugas tim IT"
                            },
                            {
                                "value": "d",
                                "label": "Abang konter"
                            },
                            {
                                "value": "e",
                                "label": "Orang gabut"
                            }
                        ]
                    }
                ]'
            ]
        ]);

    }
}
