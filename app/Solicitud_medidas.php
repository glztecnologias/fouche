<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud_medidas extends Model
{
    //
    protected $table = 'solicitudes_medidas';

    //*******    RELACIONES    ************************************************
    public function medida() //relacion con Medidas
    {
      return $this->hasMany('App\Medida', 'solicitudes_medidas_id');
    }
}
