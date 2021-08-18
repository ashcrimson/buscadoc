<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('personas')) { return; }
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direccion');
            $table->integer('rut');
            $table->smallInteger('dv-rut');
            $table->unsignedBigInteger('comuna_id');
            $table->unsignedBigInteger('region_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->foreign('region_id')->references('id')->on('regiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
