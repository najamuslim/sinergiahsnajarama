<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaritalStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marital_status', function (Blueprint $table) {
            $table->id();
            $table->string('marital_status_name');
        });

        DB::table('marital_status')->insert(
            array(
                ['marital_status_name' => 'Single'],
                ['marital_status_name' => 'Married'],
                ['marital_status_name' => 'Divorced'],
                ['marital_status_name' => 'Widowed']
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
        Schema::dropIfExists('marital_status');
    }
}
