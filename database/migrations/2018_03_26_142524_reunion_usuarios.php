<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReunionUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunion_usuarios', function (Blueprint $table) {
            $table->integer('idUsuario')->unsigned();
            $table->integer('idReunion')->unsigned();
            $table->string('rol',80);
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idReunion')->references('id')->on('reuniones')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reunion_usuarios');
    }
}
