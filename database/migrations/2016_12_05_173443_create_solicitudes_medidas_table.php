<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_medidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pantalon1_falda_1')->nullable();
            $table->string('pantalon2')->nullable();
            $table->string('falda2')->nullable();
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
        Schema::drop('solicitudes_medidas');
    }
}
