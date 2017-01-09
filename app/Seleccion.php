<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seleccion extends Model
{
    //
    protected $table = 'seleccion';

    //*******    RELACIONES    ************************************************
    public function users() //relacion con Users
    {
    return $this->belongsTo('App\User');
    }

    public function toma_medida() //relacion con Toma de medida
    {
    return $this->belongsTo('App\Toma_medida');
    }
}
