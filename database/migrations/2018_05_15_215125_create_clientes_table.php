<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {z
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('idCliente');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->string('apellidoPaterno')->nullable();
            $table->string('apellidoMaterno')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('Empresa_idEmpresa')->nullable();
            $table->string('Direccion_idDireccion')->nullable();
            $table->string('updated_at')->nullable();
            $table->string('created_at')->nullable();
            
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente');
    }
}
