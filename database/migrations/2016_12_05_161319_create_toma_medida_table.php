<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTomaMedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toma_medida', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seccion_empresa')->nullable();
            $table->string('codigo_acceso')->nullable();
            $table->string('orden_de_compra')->nullable();
            $table->string('estado')->nullable(); //Abierta o Cerrada...
            $table->dateTime('fecha_cierre')->nullable();
            $table->integer('empresas_id')->nullable();
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
        Schema::drop('toma_medida');
    }
}
