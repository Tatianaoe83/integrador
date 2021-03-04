<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->increments('idInscripcion');
            $table->timestamps();
            $table->string('idPaquete');
            $table->string('idInscripcion');
            $table->string('fecha_inscripcion');
            $table->string('fecha_fin');
            $table->string('idHospital');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inscripcions');
    }
}
