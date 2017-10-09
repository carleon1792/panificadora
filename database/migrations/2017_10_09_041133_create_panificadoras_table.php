<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanificadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panificadoras', function (Blueprint $table) {
            $table->increments('panificadora_id');
            $table->string('nombre',100);
            $table->string('direccion',100);
            $table->string('telefono',100);
            $table->string('horario_atencion',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panificadoras');
    }
}
