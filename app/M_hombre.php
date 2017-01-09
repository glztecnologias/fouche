<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_hombre extends Model
{
    //
    protected $table = 'm_hombres';

    //*******    RELACIONES    ************************************************
    public function medida() //relacion con Medidas
    {
      return $this->hasMany('App\Medida', 'm_hombres_id');
    }
}
