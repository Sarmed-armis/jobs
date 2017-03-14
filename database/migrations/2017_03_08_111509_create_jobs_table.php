<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('summary');
            $table->string('job_image');
            $table->smallInteger('number_positions')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->integer('department_id');
            $table->dateTime('expiry');
            $table->string('employment_type');
            $table->integer('salary')->unsigned();
            $table->smallInteger('min_age')->unsigned();
            $table->smallInteger('max_age')->unsigned();
            $table->string('experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
