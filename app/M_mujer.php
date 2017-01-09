<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_mujer extends Model
{
    //
    protected $table = 'm_mujeres';

    //*******    RELACIONES    ************************************************
    public function medida() //relacion con Medidas
    {
      return $this->hasMany('App\Medida', 'm_mujeres_id');
    }
}
