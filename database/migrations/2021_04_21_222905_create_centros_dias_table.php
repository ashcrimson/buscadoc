<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('centros_dias')) { return; }
        Schema::create('centros_dias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('centro_id');
            $table->unsignedBigInteger('dia_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('centro_id')->references('id')->on('centros');
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
        Schema::dropIfExists('centros_dias');
    }
}
