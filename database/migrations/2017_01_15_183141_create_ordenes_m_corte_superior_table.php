<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesMCorteSuperiorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_corte_superior', function (Blueprint $table) {
            $table->increments('id');

            $table->string('talla');
            $table->string('busto_pecho')->nullable();
            $table->string('cintura')->nullable();
            $table->string('cadera')->nullable();
            $table->string('largo_manga')->nullable();
            $table->string('largo_total')->nullable();
            $table->string('ancho_hombro')->nullable();
            $table->string('contorno_brazo')->nullable();
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
        Schema::drop('m_corte_superior');
    }
}
