<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('age');
            $table->text('bio');
            $table->string('bday');
            $table->text('street');
            $table->text('barangay');
            $table->text('city');
            $table->text('province');
            $table->text('country');
            $table->text('civil_status');
            $table->string('school_attended');
            $table->string('course');
            $table->string('major');
            $table->string('school_status');
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
        Schema::dropIfExists('profiles');
    }
}
