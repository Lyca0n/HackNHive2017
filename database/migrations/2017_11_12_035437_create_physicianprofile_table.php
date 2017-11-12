<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicianprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */
     public function up()
    {
        Schema::create('physician_profiles', function (Blueprint $table) {
            $table->increments('id')->unsinged();
            $table->string('name');
            $table->string('lastname');
            $table->string('sex');
            $table->string('location');
            $table->string('speciality');
            $table->string('zip');
            $table->string('cedule');
            $table->string('phone');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
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
         Schema::dropIfExists('patient_profiles');
    }
}
