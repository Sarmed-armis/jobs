<?php

use Illuminate\Database\Seeder;

class languages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            ['language_name' => 'Arabic'],
            ['language_name' => 'English'],
            ['language_name' => 'Kurdi'],

        ]);
    }

}
