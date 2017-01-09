<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Rol::create(['nombre' => 'administrador']);
        App\Rol::create(['nombre' => 'empresa']);
        App\Rol::create(['nombre' => 'empleado']);
    }
}
