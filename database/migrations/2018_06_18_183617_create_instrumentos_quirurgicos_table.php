<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstrumentosQuirurgicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrumentos_quirurgicos', function (Blueprint $table) {
            $table->increments('IdInstrumentosQuirurgicos');
            $table->timestamps();
            $table->string('IdInstrumentosQuirurgicos');
            $table->string('Nombre');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instrumentos_quirurgicos');
    }
}
