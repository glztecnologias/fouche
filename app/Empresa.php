<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as User;

class Empresa extends Model
{
    //
    protected $table = 'empresas';

    //*******    RELACIONES    *************************************************
    public function users() //relacion con User
    {
      return $this->hasMany('App\User','empresas_id');
    }

    public function tomas_medidas() //relacion con User
    {
      return $this->hasMany('App\Toma_medida','empresas_id');
    }

    public function pedidos() //relacion con User
    {
      return $this->hasMany('App\Pedido','empresas_id');
    }
}
