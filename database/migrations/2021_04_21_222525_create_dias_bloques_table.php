<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasBloquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('dias_bloques')) { return; }
        Schema::create('dias_bloques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bloque_id');
            $table->unsignedBigInteger('dia_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('bloque_id')->references('id')->on('bloques');
            $table->foreign('dia_id')->references('id')->on('dias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dias_bloques');
    }
}
