<?php

use Illuminate\Database\Seeder;

class QuestionsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('questions')->insert(
                [
                    ['description' => 'Test Questions',
                        'max_answer' => 2,
                        'job_id' => 1
                    ],
                    ['description' => 'Test Questions2',
                        'max_answer' => 2,
                        'job_id' => 2
                    ],
                    ['description' => 'Test Questions3',
                        'max_answer' => 2,
                        'job_id' => 3
                    ],

                ]
            );
    }
}
