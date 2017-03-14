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
                'name' => 'Arabic'
            ],
            [
                'name' => 'English'
            ],
            [
                'name' => 'Kurdi'
            ],
        ]);
    }
}
