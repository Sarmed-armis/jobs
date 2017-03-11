<?php

use Illuminate\Database\Seeder;
use \App\Models\QuestionTypes as questionTypesModel;

class QuestionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        questionTypesModel::truncate();

        questionTypesModel::insert([
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
