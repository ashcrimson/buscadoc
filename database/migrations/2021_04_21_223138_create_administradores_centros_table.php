<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradoresCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('administradores_centros')) { return; }
        Schema::create('administradores_centros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('centro_id');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('centro_id')->references('id')->on('centros');
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
        Schema::dropIfExists('administradores_centros');
    }
}
