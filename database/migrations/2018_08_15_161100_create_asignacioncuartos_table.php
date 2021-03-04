<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignacioncuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacioncuartos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('fechaEntrada');
            $table->string('horaEntrada');
            $table->string('paciente');
            $table->string('pabellon');
            $table->string('horaSalida');
            $table->string('fechaSalida');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asignacioncuartos');
    }
}
