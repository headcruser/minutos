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
         Schema::create('accion_tema', function (Blueprint $table) {
            $table->integer('idAccion')->unsigned();
            $table->integer('idTema')->unsigned();
            $table->foreign('idAccion')->references('id')->on('acciones')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idTema')->references('id')->on('temas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accion_tema');
    }
}
