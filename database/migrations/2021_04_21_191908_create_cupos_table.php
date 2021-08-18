<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('cupos')) { return; }
        Schema::create('cupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('hora_inicio');
            $table->dateTime('hora_termino');
            $table->unsignedBigInteger('bloque_id');
            $table->string('estado');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('bloque_id')->references('id')->on('bloques');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cupos');
    }
}
