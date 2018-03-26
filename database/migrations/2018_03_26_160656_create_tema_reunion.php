<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemaReunion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temaReunion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idReunion')->unsigned();
            $table->integer('idTema')->unsigned();
            $table->foreign('idReunion')->references('id')->on('reuniones');
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
        Schema::drop('temaReunion');
    }
}
