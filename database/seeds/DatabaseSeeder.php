<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(Empresa::class); //Poblar Empresas
        $this->call(Roles::class); //Poblar Roles
        $this->call(Users::class); //Poblar Usuarios Ejemplo
        Model::reguard();
    }
}
