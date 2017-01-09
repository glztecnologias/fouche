<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallasSugeridasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallas_sugeridas', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('veston_chaqueta')->nullable();
            $table->decimal('camisa_blusa')->nullable();
            $table->decimal('polera')->nullable();
            $table->decimal('pantalon')->nullable();
            $table->decimal('falda')->nullable();
            $table->integer('estatura')->nullable();
            $table->decimal('peso')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::drop('tallas_sugeridas');
    }
}
