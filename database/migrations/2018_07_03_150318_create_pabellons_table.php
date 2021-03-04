<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePabellonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pabellons', function (Blueprint $table) {
            $table->increments('idPabellon');
            $table->timestamps();
            $table->string('idPabellon');
            $table->string('nombre');
            $table->string('ubicacion');
            $table->string('descripcion');
            $table->string('idCuarto');
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
        Schema::drop('pabellons');
    }
}
