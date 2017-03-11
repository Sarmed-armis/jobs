<?php

use Illuminate\Database\Seeder;
use App\Models\Cities as citiesModel;

class CitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        citiesModel::truncate();

        citiesModel::insert([
            [
                'name' => 'baghdad'
            ],
            [
                'name' => 'Kut'
            ],
            [
                'name' => 'Basrsh'
            ],
            [
                'name' => 'Hilla'
            ],
        ]);
    }
}
