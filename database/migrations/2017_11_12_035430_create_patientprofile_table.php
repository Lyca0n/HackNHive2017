<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_profiles', function (Blueprint $table) {
            $table->increments('id')->unsinged();
            $table->string('name');
            $table->string('profilepicture');
            $table->string('lastname');
            $table->date('birthdate');
            $table->string('bloodtype');
            $table->string('sex');
            $table->string('location');
            $table->string('zip');
            $table->string('curp');
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
