<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    //
    protected $table = 'medidas';

    //*******    RELACIONES    ************************************************

    public function toma_medida() //relacion con toma de medida
    {
    return $this->belongsTo('App\Toma_medida');
    }

    public function solicitudes_medidas() //relacion con solicitudes de medidas
    {
    return $this->belongsTo('App\Solicitud_medidas');
    }


    public function users() //relacion con Users
    {
    return $this->belongsTo('App\User');
    }

    public function tallas_sugeridas() //relacion con Tallas Sugeridas
    {
    return $this->belongsTo('App\Talla_sugeridas','tallas_sugeridas_id');
    }

    public function m_mujeres() //relacion con Medidas Mujeres
    {
    return $this->belongsTo('App\M_mujer');
    }

    public function m_hombres() //relacion con Medidas Hombres
    {
    return $this->belongsTo('App\M_hombre');
    }



}
