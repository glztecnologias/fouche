<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->nullable();
            $table->integer('tallas_sugeridas_id')->nullable();
            $table->integer('toma_medida_id')->nullable();
            $table->integer('solicitudes_medidas_id')->nullable();
            $table->integer('m_hombres_id')->nullable();
            $table->integer('m_mujeres_id')->nullable();
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
        Schema::drop('medidas');
    }
}
