<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_type', function (Blueprint $table) {
            $table->id();
            $table->string('job_type_name');
        });

        DB::table('job_type')->insert(
            array(
                ['job_type_name' => 'Fulltime'],
                ['job_type_name' => 'Parttime'],
                ['job_type_name' => 'Freelance'],
                ['job_type_name' => 'Intership (Magang)'],
                ['job_type_name' => 'Contract (Kontrak)'],
                ['job_type_name' => 'Permanent (Tetap)']
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_type');
    }
}
