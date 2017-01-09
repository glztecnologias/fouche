<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total_empleados');
            $table->string('seccion_empresa')->nullable();
            $table->string('orden_de_compra')->nullable();
          //  $table->string('articulo')->nullable();
          //  $table->dateTime('fecha_creacion')->nullable();
            $table->integer('toma_medida_id');
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
        Schema::drop('pedidos');
    }
}
