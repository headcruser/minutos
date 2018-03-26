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
            $table->string('convocado',150);
            $table->string('tipoReunion',150);
            $table->date('fecha');
            $table->dateTime('hora');
            $table->string('lugar',150);
            $table->string('organizador',150);
            $table->string('asistentes',150);
            $table->boolean('status');
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
