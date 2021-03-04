<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sevicios', function (Blueprint $table) {
            $table->increments('idServicio');
            $table->timestamps();
            $table->string('idServicio');
            $table->string('nombre');
            $table->string('descripcion');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sevicios');
    }
}
