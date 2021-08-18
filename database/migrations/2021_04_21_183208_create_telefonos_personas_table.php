<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonosPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('telefonos_personas')) { return; }
        Schema::create('telefonos_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('telefono_id');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('telefono_id')->references('id')->on('telefonos');
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefonos_personas');
    }
}
