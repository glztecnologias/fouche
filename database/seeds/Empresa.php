<?php

use Illuminate\Database\Seeder;

class Empresa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Empresa::create([
          'nombre' => 'Empresa 1',
          'email' => 'empresa1@mail.com',
          'password' => 'fouche.2016'

        ]);
    }
}
