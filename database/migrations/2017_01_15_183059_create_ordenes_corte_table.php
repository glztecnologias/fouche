<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesCorteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_corte', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total_orden_corte')->nullable();
            $table->string('tela')->nullable();
            $table->string('tela_aplicacion')->nullable();
            $table->string('forro')->nullable();
            $table->string('fusionado')->nullable();
            $table->string('color_tela')->nullable();

            $table->integer('pedidos_id');
            $table->integer('prendas_id');
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
        Schema::drop('ordenes_corte');
    }
}
