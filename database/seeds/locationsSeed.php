<?php

use Illuminate\Database\Seeder;

class locationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('locations')->insert([
                ['name' => 'Baghdad',
                    'latitude' => 33.3128,
                    'longitude' => 44.3615
                ],
                ['name' => 'Basrsh',
                    'latitude' => 33.3128,
                    'longitude' => 44.3615
                ],
                ['name' => 'Hilla',
                    'latitude' => 33.3128,
                    'longitude' => 44.3615
                ],
                ['name' => 'Dyala',
                    'latitude' => 33.3128,
                    'longitude' => 44.3615
                ],
                ['name' => 'Kut',
                    'latitude' => 33.3128,
                    'longitude' => 44.3615
                ],



            ]);
    }
}
