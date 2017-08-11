<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolPrimariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_primaries', function (Blueprint $table) {
            $table->integer('user_id');
            //elementary
            $table->string('pri_school')->nullable();
            $table->string('pri_address')->nullable();
            $table->string('pri_start')->nullable();
            $table->string('pri_end')->nullable();

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
        Schema::dropIfExists('school_primaries');
    }
}
