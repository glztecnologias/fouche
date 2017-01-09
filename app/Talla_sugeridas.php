<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talla_sugeridas extends Model
{
    //
    protected $table = 'tallas_sugeridas';

    //*******    RELACIONES    ************************************************

    public function medida() //relacion con Medidas
    {
      return $this->hasMany('App\Medida', 'tallas_sugeridas_id');
    }
}
