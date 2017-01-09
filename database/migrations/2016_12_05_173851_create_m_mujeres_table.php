<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMMujeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_mujeres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ancho_espalda')->nullable();
            $table->integer('busto')->nullable();
            $table->integer('cintura')->nullable();
            $table->integer('cadera_baja')->nullable();
            $table->integer('largo_manga')->nullable();
            $table->integer('largo_falda')->nullable();
            $table->integer('largo_pantalon')->nullable();
            $table->integer('contorno_brazo')->nullable();
            $table->integer('contorno_muslo')->nullable();
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
        Schema::drop('m_mujeres');
    }
}
