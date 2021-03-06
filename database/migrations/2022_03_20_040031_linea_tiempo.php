<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LineaTiempo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LineaTiempos', function(Blueprint $table){
            $table->bigIncrements('Codigo');
            $table->string('Nombre', 60);
            $table->string('PalabrasClave');
            $table->string('Descripcion');
            $table->char('Estado', 1); // D: En Desarrollo, B: Baja, F: Finalizado
            $table->char('Vista', 1); // P: Público, O: Oculto
            $table->unsignedBigInteger('CodigoTema');
            $table->foreign('CodigoTema')->references('Codigo')->on('Temas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LineaTiempos');
    }
}
