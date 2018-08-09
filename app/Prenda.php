<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    //
    protected $table = 'prendas';

    //RELACION CON ORDEN DE CORTE

    public function ordenes_corte() //relacion con User
    {
      return $this->hasMany('App\Orden_corte','prendas_id');
    }
}
