<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloquesMedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('bloques_medicos')) { return; }
        Schema::create('bloques_medicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bloque_id');
            $table->unsignedBigInteger('medico_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('bloque_id')->references('id')->on('bloques');
            $table->foreign('medico_id')->references('id')->on('medicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloques_medicos');
    }
}
