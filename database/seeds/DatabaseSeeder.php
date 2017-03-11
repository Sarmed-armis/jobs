<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(LocationsSeeder::class);
         $this->call(LanguagesSeeder::class);
         $this->call(CitesSeeder::class);
         $this->call(QuestionTypesSeeder::class);
         $this->call(DepartmentsSeeder::class);
    }
}
