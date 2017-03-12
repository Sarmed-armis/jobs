<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->truncate();
         DB::table('users')->insert([
              'name'=>'admin',
              'email'=>'dev@jt.iq',
              'password'=> bcrypt('4VaT?Y2G')
        ]);
    }
}
