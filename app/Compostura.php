<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compostura extends Model
{
    //
    protected $table = 'composturas';

    //*******    RELACIONES    ************************************************

    public function users() //relacion con Users
    {
    return $this->belongsTo('App\User','users_id');
    }

    public function pedido() //relacion con Pedido
    {
    return $this->belongsTo('App\Pedido','pedidos_id');
    }

}
