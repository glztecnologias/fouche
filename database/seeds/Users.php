<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
          'nombre' => 'Administrador Vestuario',
          'email' => 'cvarela@fouche.cl',
          'estado' => 'activo',
          'password' => bcrypt('fouche1234'),
          'roles_id' => 1
        ]);

        App\User::create([
          'nombre' => 'Empresa1',
          'email' => 'empresa@mail.com',
          'estado' => 'activo',
          'password' => bcrypt('fouche.2016'),
          'roles_id' => 2,
          'empresas_id' => 1
        ]);

        App\User::create([
          'nombre' => 'Empleado1',
          'email' => 'empleado@mail.com',
          'estado' => 'activo',
          'password' => bcrypt('fouche.2016'),
          'rut' => '11111111-1',
          'roles_id' => 3,
          'empresas_id' => 1
        ]);
    }
}
