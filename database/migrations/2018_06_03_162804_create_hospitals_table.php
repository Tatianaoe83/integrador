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
            $table->string('ciudad');
            $table->string('pabellon_idPabellon');
            $table->string('Hospital_idHospital');
            $table->string('Pabellon_idPabellon');
            $table->string('Asistente_idAsistente');
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
