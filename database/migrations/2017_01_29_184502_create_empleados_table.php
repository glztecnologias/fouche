<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('rut',15)->unique()->nullable();
            $table->string('nombre_sucursal')->nullable();
            $table->string('direccion_sucursal',300)->nullable();
            $table->string('telefono')->nullable();
            $table->string('sexo',2)->nullable();
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
        Schema::drop('empleados');
    }
}
