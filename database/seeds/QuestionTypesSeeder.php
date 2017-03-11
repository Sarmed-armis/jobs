<?php

use Illuminate\Database\Seeder;
use \App\Models\QuestionTypes as questionTypes;

class QuestionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        questionTypes::truncate();
        questionTypes::insert([
            [
                'type' => 'input'
            ],
            [
                'type' => 'checkbox'
            ],
            [
                'type' => 'radio'
            ],
            [
                'type' => 'checklist'
            ],

        ]);
    }
}
