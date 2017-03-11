<?php

use Illuminate\Database\Seeder;

class citesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cities')->insert([
            ['name' => 'baghdad'],
            ['name' => 'Kut'],
            ['name' => 'Basrsh'],
            ['name' => 'Hilla'],

        ]);
    }
}
