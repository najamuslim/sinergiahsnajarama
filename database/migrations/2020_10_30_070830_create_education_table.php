<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('education_name');
        });

        DB::table('education')->insert(
            array(
                ['education_name' => 'SMA'],
                ['education_name' => 'SMK'],
                ['education_name' => 'D1'],
                ['education_name' => 'D2'],
                ['education_name' => 'D3'],
                ['education_name' => 'D4'],
                ['education_name' => 'S1'],
                ['education_name' => 'S2'],
                ['education_name' => 'S3']
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
        Schema::dropIfExists('education');
    }
}
