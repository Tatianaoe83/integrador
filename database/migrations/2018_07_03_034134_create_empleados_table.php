<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('idEmpleado');
            $table->timestamps();
            $table->string('idEmpleado');
            $table->string('nombre');
            $table->string('apellidoMaterno');
            $table->string('apellidoPaterno');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('idTipoEmpleado');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleados');
    }
}
