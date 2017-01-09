<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $table = 'pedidos';

    //*******    RELACIONES    ************************************************

    public function toma_medida() //relacion con Toma de medida
    {
    return $this->belongsTo('App\Toma_medida');
    }

    public function composturas() //relacion con Compostura
    {
      return $this->hasMany('App\Compostura', 'pedidos_id');
    }

    public function empresa() //relacion con Empresa
    {
      return $this->belongsTo('App\Empresa', 'empresas_id');
    }
}
