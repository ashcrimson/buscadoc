<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursoFisicoBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('recurso_fisico_boxes')) { return; }
        Schema::create('recurso_fisico_boxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('centro_id');
            $table->string('nombre');
            $table->string('observaciones');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('tipo_box_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('centro_id')->references('id')->on('centros');
            $table->foreign('estado_id')->references('id')->on('estado_boxes');
            $table->foreign('tipo_box_id')->references('id')->on('tipo_boxes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso_fisico_boxes');
    }
}
