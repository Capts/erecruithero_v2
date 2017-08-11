<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character_references', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('char_name')->nullable();
            $table->string('char_company')->nullable();
            $table->integer('char_number')->nullable();
            $table->string('char_address')->nullable();
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
        Schema::dropIfExists('character_references');
    }
}
