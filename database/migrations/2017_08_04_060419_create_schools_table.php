<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            //elementary
            $table->string('elem_school');
            $table->string('elem_address');
            $table->string('elem_start');
            $table->string('elem_end');

            //secondary
            $table->string('sec_school');
            $table->string('sec_address');
            $table->string('sec_start');
            $table->string('sec_end');

            //tertiary
            $table->string('ter_school');
            $table->string('ter_degree');
            $table->string('ter_field_of_study');
            $table->string('ter_major');
            $table->string('ter_start_year');
            $table->string('ter_end_year');
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
        Schema::dropIfExists('schools');
    }
}
