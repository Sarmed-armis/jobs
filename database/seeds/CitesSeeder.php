<?php

use Illuminate\Database\Seeder;
use App\Models\Cities as City;

class citesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            City::truncate();

            City::insert(
                [
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
                ]
            );
    }
}
