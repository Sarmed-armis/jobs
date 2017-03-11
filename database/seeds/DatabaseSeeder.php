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
         $this->call(locationsSeedr::class);
         $this->call(languagesSeedr::class);
         $this->call(citesSeedr::class);
         $this->call(questionTypesSeedr::class);
         $this->call(departmentsSeedr::class);
    }
}
