<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'email', 'password','rut','nombre_sucursal','direccion_sucursal','sexo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    //*******    RELACIONES    *************************************************
    public function rol() //relacion con Rol
    {
    return $this->belongsTo('App\Rol','roles_id');
    }

    public function empresa() //relacion con Rol
    {
    return $this->belongsTo('App\Empresa','empresas_id');
    }

    public function seleccion() //relacion con Seleccion
    {
      return $this->hasMany('App\Seleccion', 'users_id');
    }

    public function composturas() //relacion con Compostura
    {
      return $this->hasMany('App\Compostura', 'users_id');
    }

    public function Medida() //relacion con Medidas
    {
      return $this->hasMany('App\Seleccion', 'users_id');
    }


}
