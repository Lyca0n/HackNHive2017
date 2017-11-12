<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 'symptoms','diagnose','medication'
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id')->unsinged();
            $table->string('symptoms');
            $table->string('diagnose');
            $table->string('medication');
            $table->integer('physician_id')->unsigned()->index();
            $table->foreign('physician_id')->references('id')->on('physician_profiles');
            $table->integer('patient_id')->unsigned()->index();
            $table->foreign('patient_id')->references('id')->on('patient_profiles');
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
        Schema::dropIfExists('consultations');
    }
}
