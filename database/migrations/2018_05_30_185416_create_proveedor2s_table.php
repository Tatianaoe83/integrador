<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProveedor2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor2s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id');
            $table->string('nombre');
            $table->string('email');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proveedor2s');
    }
}
