<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_corte_superior extends Model
{
    //
    protected $table = 'm_corte_superior';

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
