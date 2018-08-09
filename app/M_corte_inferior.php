<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_corte_inferior extends Model
{
    //
    protected $table = 'm_corte_inferior';

    //relacion con ordenes_corte

    public function orden_corte()
    {
    return $this->belongsTo('App\Orden_corte','ordenes_corte_id');
    }

    public function user()
    {
    return $this->belongsTo('App\User','users_id');
    }
}
