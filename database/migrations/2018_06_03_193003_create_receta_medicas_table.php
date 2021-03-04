<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecetaMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta_medicas', function (Blueprint $table) {
            $table->increments('idRecetaMedica');
            $table->timestamps();
            $table->string('doctor');
            $table->string('fechaConsulta');
            $table->string('nombreMedicamento');
            $table->string('Medicamento_idMedicamento');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('receta_medicas');
    }
}
