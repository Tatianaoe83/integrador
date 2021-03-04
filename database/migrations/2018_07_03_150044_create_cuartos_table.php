<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuartos', function (Blueprint $table) {
            $table->increments('idCuarto');
            $table->timestamps();
            $table->string('idCuarto');
            $table->string('nombre');
            $table->string('ubicacion');
            $table->string('idPiso');
            $table->string('idArea');
            $table->string('idEstatus');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cuartos');
    }
}
