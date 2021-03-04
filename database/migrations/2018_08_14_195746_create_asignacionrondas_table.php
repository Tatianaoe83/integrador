<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignacionrondasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacionrondas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('fecha');
            $table->string('servicio');
            $table->string('empleado');
            $table->string('horaInicio');
            $table->string('horaFin');
            $table->string('observacionInicial');
            $table->string('observacionFinal');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asignacionrondas');
    }
}
