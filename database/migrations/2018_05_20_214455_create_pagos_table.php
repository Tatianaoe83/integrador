<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('idPago');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->string('monto')->nullable();
            $table->string('formaPago')->nullable();
            $table->string('lugar')->nullable();
            $table->string('Empresa_idEmpresa')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagos');
    }
}
