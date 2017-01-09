<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMHombresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_hombres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('veston_largo')->nullable();
            $table->integer('veston_ancho_espalda')->nullable();
            $table->integer('veston_largo_manga')->nullable();
            $table->integer('veston_contorno_pecho')->nullable();
            $table->integer('veston_contorno_cintura')->nullable();
            $table->integer('pantalon_contorno_cintura')->nullable();
            $table->integer('pantalon_largo_total')->nullable();
            $table->integer('pantalon_ancho_cadera')->nullable();
            $table->integer('pantalon_contorno_rodilla')->nullable();
            $table->integer('pantalon_contorno_basta')->nullable();
            $table->integer('contorno_cuello_cm')->nullable();
            $table->decimal('camisa_cuello_n')->nullable();
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
        Schema::drop('m_hombres');
    }
}
