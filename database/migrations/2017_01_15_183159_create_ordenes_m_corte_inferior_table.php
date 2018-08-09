<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesMCorteInferiorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_corte_inferior', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('talla');
            $table->string('cintura')->nullable();
            $table->string('cadera')->nullable();
            $table->string('largo_total')->nullable();
            $table->string('tiro_delantero')->nullable();
            $table->string('tiro_trasero')->nullable();
            $table->string('tipo_completo')->nullable();
            $table->string('contorno_pierna')->nullable();
            $table->string('observaciones')->nullable();

            $table->integer('ordenes_corte_id'); //foranea
            $table->integer('users_id')->nullable(); //foranea

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
        Schema::drop('m_corte_inferior');
    }
}
