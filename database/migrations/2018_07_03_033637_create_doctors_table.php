<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('idDoctor');
            $table->timestamps();
            $table->string('idDoctor');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('telefono');
            $table->string('email');
            $table->string('idEspecialidad');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctors');
    }
}
