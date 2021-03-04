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
            $table->string('nombre');
            $table->string('estado');
            $table->string('municipio');
            $table->string('cuidad');
            $table->string('pabellon_idDireccion');
            $table->string('Hospital_idHospital');
            $table->string('Pabellon_Idpabellon');
            $table->string('asistente_Idasistente');
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
