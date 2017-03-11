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
         $this->call(locationsSeed::class);
         $this->call(languages::class);
         $this->call(QuestionsSeed::class);
         $this->call(citesSeed::class);
    }
}
