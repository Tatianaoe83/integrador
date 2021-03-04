<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('idHospital');
            $table->timestamps();
            $table->string('idHospital');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('estado');
            $table->string('latitud');
            $table->string('longitud');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hospitals');
    }
}
