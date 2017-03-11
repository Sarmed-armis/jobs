<?php

use Illuminate\Database\Seeder;
use \App\Models\Languages as languagesModel;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        languagesModel::truncate();

        languagesModel::insert([
            [
                'language_name' => 'Arabic'
            ],
            [
                'language_name' => 'English'
            ],
            [
                'language_name' => 'Kurdi'
            ],
        ]);
    }
}
