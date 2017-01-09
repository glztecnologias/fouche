<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toma_medida extends Model
{
    //
    protected $table = 'toma_medida';

    //*******    RELACIONES    ************************************************
    public function seleccion() //relacion con Seleccion
    {
      return $this->hasMany('App\Seleccion', 'toma_medida_id');
    }

    public function pedido() //relacion con Pedidos
    {
      return $this->hasMany('App\Pedido', 'toma_medida_id');
    }

    public function empresa() //relacion con Pedidos
    {
      return $this->belongsTo('App\Empresa', 'empresas_id');
    }

    public function medida() //relacion con Medidas
    {
      return $this->hasMany('App\Medida', 'toma_medida_id');
    }
}
