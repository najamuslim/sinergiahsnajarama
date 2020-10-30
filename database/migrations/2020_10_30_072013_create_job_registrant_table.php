<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobRegistrantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_registrant', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('id_job_position');
            $table->string('date_and_place_of_birth');
            $table->integer('id_last_education');
            $table->string('school');
            $table->string('major');
            $table->string('domicile_address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('work_experience');
            $table->integer('id_marital_status');
            $table->string('religion');
            $table->string('expected_salary');
            $table->integer('id_type_of_job');
            $table->string('vacancy_information');
            $table->string('last_GPA');
            $table->string('CV_path_file');
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
        Schema::dropIfExists('job_registrant');
    }
}
