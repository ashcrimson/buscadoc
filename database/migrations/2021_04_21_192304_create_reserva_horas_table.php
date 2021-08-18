<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('reserva_horas')) { return; }
        Schema::create('reserva_horas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paciente_id');
            $table->unsignedBigInteger('cupo_id');
            $table->string('estado');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('cupo_id')->references('id')->on('cupos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva_horas');
    }
}
