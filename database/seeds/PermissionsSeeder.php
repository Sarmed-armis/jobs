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

        PermissionsModel::truncate();

        PermissionsModel::insert([
            [
                'id' => 1,
                'key' => 'job.show',
                'description' => 'Allow user to show Jobs'
            ],
            [
                'id' => 2,
                'key' => 'job.edit',
                'description' => 'Allow user to edit Jobs'
            ],
            [   'id' => 3,
                'key' => 'job.store',
                'description' => 'Allow user to edit Jobs'
            ],
            [
                'id' => 4,
                'key' => 'setting.show',
                'description' => 'Allow user to edit Jobs'
            ],
            [
                'id' => 5,
                'key' => 'setting.change',
                'description' => 'Allow user to change setting panel'
            ],
            [
                'id' => 6,
                'key' => 'user.show',
                'description' => 'Allow user to show users'
            ],
            [
                'id' => 7,
                'key' => 'user.edit',
                'description' => 'Allow user to edit users'
            ],
            [   'id' => 8,
                'key' => 'user.store',
                'description' => 'Allow user create new user'
            ],
            [
                'id' => 9,
                'key' => 'user.delete',
                'description' => 'Allow user to delete users'
            ],

            [
                'id' => 10,
                'key' => 'group.show',
                'description' => 'Allow user to show groups'
            ],

            [
                'id' => 11,
                'key' => 'group.edit',
                'description' => 'Allow user to edit new group'
            ],


            [
                'id' => 12,
                'key' => 'group.store',
                'description' => 'Allow user to create new group'
            ],
            [
                'id' => 13,
                'key' => 'group.access',
                'description' => 'Allow user to access to group'
            ],
            [
                'id' => 14,
                'key' => 'user.access',
                'description' => 'Allow user to access to user '
            ],


        ]);
    }
}
