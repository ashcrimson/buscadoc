<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonosCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('telefonos_centros')) { return; }
        Schema::create('telefonos_centros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('telefono_id');
            $table->unsignedBigInteger('centro_id');
            $table->timestamps();
            $table->boolean('visible')->default(true);

            $table->foreign('centro_id')->references('id')->on('centros');
            $table->foreign('telefono_id')->references('id')->on('telefonos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefonos_centros');
    }
}
