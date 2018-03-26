<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionTema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('accionTema', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idAccion')->unsigned();
            $table->integer('idTema')->unsigned();
            $table->foreign('idAccion')->references('id')->on('acciones');
            $table->foreign('idTema')->references('id')->on('temas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accionTema');
    }
}
