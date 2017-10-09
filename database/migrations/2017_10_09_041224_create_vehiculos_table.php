<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('vehiculo_id');
            $table->integer('panificadora_id')->unsigned();
            $table->string('placa',100);
            $table->string('modelo',100);
            $table->timestamps();
            $table->foreign('panificadora_id')->references('panificadora_id')->on('panificadoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
