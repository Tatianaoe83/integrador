<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstrumentoQuirurjicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumento_quirurjicos', function (Blueprint $table) {
            $table->increments('idInstrumentoQuirurjico');
            $table->timestamps();
            $table->string('seccion');
            $table->string('inventario');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instrumento_quirurjicos');
    }
}
