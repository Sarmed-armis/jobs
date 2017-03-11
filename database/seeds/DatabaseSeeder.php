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
         $this->call(LocationSeeder::class);
         $this->call(LanguageSeeder::class);
         $this->call(CitesSeeder::class);
         $this->call(QuestionTypeSeeder::class);
         $this->call(DepartmentSeeder::class);
    }
}
