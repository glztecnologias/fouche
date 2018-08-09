<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden_corte extends Model
{
    //
      protected $table = 'ordenes_corte';

      //Relacion con prendas

      public function prenda()
      {
      return $this->belongsTo('App\Prenda','prendas_id');
      }

      //relacion con pedidos

      public function pedido()
      {
      return $this->belongsTo('App\Pedido','pedidos_id');
      }

      //Relacion con m_corte_superior

      public function m_corte_superior() //relacion con User
      {
        return $this->hasMany('App\M_corte_superior','ordenes_corte_id');
      }

      //Relacion con m_corte_inferior

      public function m_corte_inferior() //relacion con User
      {
        return $this->hasMany('App\M_corte_inferior','ordenes_corte_id');
      }


}
