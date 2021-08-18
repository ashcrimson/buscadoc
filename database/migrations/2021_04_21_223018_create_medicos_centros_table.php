<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('medicos_centros')) { return; }
        Schema::create('medicos_centros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('centro_id');
            $table->unsignedBigInteger('medico_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('centro_id')->references('id')->on('centros');
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
        Schema::dropIfExists('medicos_centros');
    }
}
