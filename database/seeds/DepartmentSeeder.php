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
                'name' => 'Research and development',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/6.png'
            ],
            [
                'name' => 'Human resources',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/5.png'
            ],
            [
                'name' => 'Finance',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Management',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/4.png'
            ],
            [
                'name' => 'Marketing',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/10.png'
            ],
            [
                'name' => 'Customer service',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/11.png'
            ],
            [
                'name' => 'Sales',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Transmission and Wireless',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Maintenance',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Secretarial',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Call Centre',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Network Operation Center',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Drivers',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Fiber',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Services',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Storekeepers',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Microwaves',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ],
            [
                'name' => 'Followup',
                'image' => 'http://demo.themeregion.com/jobs-updated/images/icon/1.png'
            ]
        ]);
    }
}