<?php

use Illuminate\Database\Seeder;
use \App\Models\Departments as departmentsModels;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        departmentsModels::truncate();

        departmentsModels::insert([
            [
                'name' => 'Research and development'
            ],
            [
                'name' => 'Human resources'
            ],
            [
                'name' => 'Finance'
            ],
            [
                'name' => 'Management'
            ],
            [
                'name' => 'Marketing'
            ],
            [
                'name' => 'Customer service'
            ],
            [
                'name' => 'Sales'
            ],
            [
                'name' => 'Transmission and Wireless'
            ],
            [
                'name' => 'Maintenance'
            ],
            [
                'name' => 'Secretarial'
            ],
            [
                'name' => 'Call Centre'
            ],
            [
                'name' => 'Network Operation Center'
            ],
            [
                'name' => 'Drivers'
            ],
            [
                'name' => 'Fiber'
            ],
            [
                'name' => 'Services'
            ],
            [
                'name' => 'Storekeepers'
            ],
            [
                'name' => 'Microwaves'
            ],
            [
                'name' => 'Followup'
            ]
        ]);
    }
}