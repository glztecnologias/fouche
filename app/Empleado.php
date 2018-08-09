<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleados';
    protected $fillable = ['nombre', 'email','rut','nombre_sucursal','direccion_sucursal','sexo'];

    public function empresa() //relacion con Rol
    {
    return $this->belongsTo('App\Empresa','empresas_id');
    }
    
    public function composturas() //relacion con Compostura
    {
      return $this->hasMany('App\Compostura', 'users_id');
    }
}
