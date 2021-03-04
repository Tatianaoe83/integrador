<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->increments('idDireccion');
            $table->timestamps();
            $table->string('idDireccion');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('colonia');
            $table->string('codigoPostal');
            $table->string('calle');
            $table->string('numero');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('direccions');
    }
}
