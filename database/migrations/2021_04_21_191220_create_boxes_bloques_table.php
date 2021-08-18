<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxesBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('boxes_bloques')) { return; }
        Schema::create('boxes_bloques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bloque_id');
            $table->unsignedBigInteger('recurso_fisico_box_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('bloque_id')->references('id')->on('bloques');
            $table->foreign('recurso_fisico_box_id')->references('id')->on('recurso_fisico_boxes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxes_bloques');
    }
}
