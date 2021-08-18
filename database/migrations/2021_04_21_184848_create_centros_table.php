<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('centros')) { return; }
        Schema::create('centros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->unsignedBigInteger('comuna_id');
            $table->unsignedBigInteger('region_id');
            $table->string('email');
            $table->time('hora_apertura');
            $table->time('hora_cierre');
            $table->integer('cantidad_recursos_fisicos');
            $table->unsignedBigInteger('cliente_id');

            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->foreign('region_id')->references('id')->on('regiones');
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros');
    }
}
