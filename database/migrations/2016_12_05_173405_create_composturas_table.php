<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComposturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composturas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prenda')->nullable();
            $table->string('color')->nullable();
            $table->string('error_prenda')->nullable();
            $table->string('compostura_solicitada')->nullable();
            $table->integer('pedidos_id');
            $table->integer('users_id');
          //  $table->integer('empresas_id')->nullable();
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
        Schema::drop('composturas');
    }
}
