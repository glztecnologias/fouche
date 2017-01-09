<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = 'roles';

    //*******    RELACIONES    *************************************************
    public function users() //relacion con User
    {
      return $this->hasMany('App\User','roles_id');
    }

}
