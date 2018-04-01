<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearReunion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reuniones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('convocado',150)->nullable();
            $table->string('tipoReunion',150)->nullable();
            $table->date('fecha');
            $table->dateTime('hora');
            $table->string('lugar',150);
            $table->string('organizador',150)->nullable();
            $table->string('asistentes',150)->nullable();;
            $table->boolean('status')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reuniones');
    }
}
