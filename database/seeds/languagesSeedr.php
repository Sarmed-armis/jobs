<?php

use Illuminate\Database\Seeder;
use \App\Models\Languages as Language;

class languagesSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::truncate();
        Language::insert(
            [
                [
                    'language_name' => 'Arabic'
                ],
                [
                    'language_name' => 'English'
                ],
                [
                    'language_name' => 'Kurdi'
                ],
            ]
        );
    }

}
