<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecursosFisicoBoxesEquipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('recursos_fisico_boxes_equip')) { return; }
        Schema::create('recursos_fisico_boxes_equip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('recurso_fisico_box_id');
            $table->unsignedBigInteger('equipamiento_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('recurso_fisico_box_id')->references('id')->on('recurso_fisico_boxes');
            $table->foreign('equipamiento_id')->references('id')->on('equipamientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recursos_fisico_boxes_equipamientos');
    }
}
