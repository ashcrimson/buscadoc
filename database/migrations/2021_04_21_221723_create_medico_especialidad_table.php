<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicoEspecialidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('medico_especialidad')) { return; }
        Schema::create('medico_especialidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('especialidad_id');
            $table->unsignedBigInteger('medico_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('especialidad_id')->references('id')->on('especialidades');
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
        Schema::dropIfExists('medico_especialidad');
    }
}
