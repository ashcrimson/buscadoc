<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('medicos_convenios')) { return; }
        Schema::create('medicos_convenios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('medico_id');
            $table->unsignedBigInteger('prevision_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('medico_id')->references('id')->on('medicos');
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
        Schema::dropIfExists('medicos_convenios');
    }
}
