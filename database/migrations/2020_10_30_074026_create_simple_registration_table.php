<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimpleRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simple_registration', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('kelas');
            $table->string('nisn');
            $table->string('sekolah_sebelumnya');
            $table->string('alasan_homeschooling');
            $table->string('no_hp');
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
        Schema::dropIfExists('simple_registration');
    }
}
