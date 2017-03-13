<?php

use Illuminate\Database\Seeder;
use App\Models\Permissions as PermissionsModel;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //disabled by Saif
//        PermissionsModel::truncate();
//
//        PermissionsModel::insert([
//            [
//                'id' => 1,
//                'key' => 'job.show',
//                'description' => 'Allow user to show Jobs'
//            ],
//            [
//                'id' => 2,
//                'key' => 'job.edit',
//                'description' => 'Allow user to edit Jobs'
//            ],
//            [   'id' => 3,
//                'key' => 'job.store',
//                'description' => 'Allow user to edit Jobs'
//            ],
//            [
//                'id' => 4,
//                'key' => 'setting.show',
//                'description' => 'Allow user to edit Jobs'
//            ],
//            [
//                'id' => 5,
//                'key' => 'setting.change',
//                'description' => 'Allow user to change setting panel'
//            ]
//        ]);
    }
}