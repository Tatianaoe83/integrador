<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('idPaciente');
            $table->timestamps();
            $table->string('idPaciente');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('sexo');
            $table->string('fecha_nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('enfermedad');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pacientes');
    }
}
