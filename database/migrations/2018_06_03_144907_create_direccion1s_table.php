<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccion1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion1s', function (Blueprint $table) {
            $table->increments('idDireccion');
            $table->timestamps();
            $table->string('direccion')->nullable();
            $table->string('colonia')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('telefono')->nullable();
            $table->string('Ciudad_idCiudad')->nullable();
            $table->string('Hospital_idHospital')->nullable();
            $table->string('Doctor_idDoctor')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direccion1s');
    }
}
