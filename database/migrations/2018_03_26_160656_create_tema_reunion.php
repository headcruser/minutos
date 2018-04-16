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
        Schema::create('tema_reunion', function (Blueprint $table) {
            $table->integer('idReunion')->unsigned();
            $table->integer('idTema')->unsigned();
            $table->foreign('idReunion')->references('id')->on('reuniones')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idTema')->references('id')->on('temas')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tema_reunion');
    }
}
