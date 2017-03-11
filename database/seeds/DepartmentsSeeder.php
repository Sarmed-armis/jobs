<?php

use Illuminate\Database\Seeder;
use \App\Models\Departments as Dep;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dep::truncate();
        Dep::insert([
            [
                'id' => 1,
                'name' => 'Research and development'
            ],
            [
                'id' => 2,
                'name' => 'Human resources'
            ],
            [
                'id' => 3,
                'name' => 'Finance'
            ],
            [
                'id' => 4,
                'name' => 'Management'
            ],
            [
                'id' => 5,
                'name' => 'Marketing'
            ],
            [
                'id' => 6,
                'name' => 'Customer service'
            ],
            [
                'id' => 7,
                'name' => 'Sales'
            ],
            [
                'id' => 8,
                'name' => 'Transmission and Wireless'
            ],
            [
                'id' => 9,
                'name' => 'Maintenance'
            ],
            [
                'id' => 10,
                'name' => 'Secretarial'
            ],
            [
                'id' => 11,
                'name' => 'Call Centre'
            ],
            [
                'id' => 12,
                'name' => 'Network Operation Center'
            ],
            [
                'id' => 13,
                'name' => 'Drivers'
            ],
            [
                'id' => 14,
                'name' => 'Fiber'
            ],
            [
                'id' => 15,
                'name' => 'Services'
            ],
            [
                'id' => 16,
                'name' => 'Storekeepers'
            ],
            [
                'id' => 17,
                'name' => 'Microwaves'
            ],
            [
                'id' => 18,
                'name' => 'Followup'
            ]
        ]);
    }
}