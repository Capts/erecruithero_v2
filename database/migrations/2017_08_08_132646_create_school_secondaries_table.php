<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolSecondariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_secondaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('sec_school')->nullable();
            $table->string('sec_address')->nullable();
            $table->string('sec_start')->nullable();
            $table->string('sec_end')->nullable();
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
        Schema::dropIfExists('school_secondaries');
    }
}
