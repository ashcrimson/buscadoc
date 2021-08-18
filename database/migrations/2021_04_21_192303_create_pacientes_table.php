<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('pacientes')) { return; }
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('prevision_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('persona_id')->references('id')->on('personas');
            $table->foreign('prevision_id')->references('id')->on('previsiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
