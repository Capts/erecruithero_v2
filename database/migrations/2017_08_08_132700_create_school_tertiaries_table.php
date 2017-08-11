<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTertiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_tertiaries', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('ter_school')->nullable();
            $table->string('ter_address')->nullable();
            $table->string('ter_degree')->nullable();
            $table->string('ter_field_of_study')->nullable();
            $table->string('ter_major')->nullable();
            $table->string('ter_start_year')->nullable();
            $table->string('ter_end_year')->nullable();
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
        Schema::dropIfExists('school_tertiaries');
    }
}
