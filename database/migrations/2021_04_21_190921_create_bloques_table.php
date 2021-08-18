<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('bloques')) { return; }
        Schema::create('bloques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('hora_inicio');
            $table->dateTime('hora_termino');
            $table->string('nombre');
            $table->string('duracion_cupo');
            $table->string('intervalo_cupos');
            $table->timestamps();
            $table->boolean('visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloques');
    }
}
