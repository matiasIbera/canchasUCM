<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='users';
    protected $fillable = [
        'name','apellido', 'email', 'password','rut','carrera_id','anio_ingreso','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //un usuario pertenece a una carrera
    public function carrera()
    {

        return $this->belongsTo('App\Carrera');
    }

    // un usuario tiene muchas reservas

    public function reservas()
    {
        return $this->hasMany('App\Reserva', 'id_usuario');
    }

    public function reservabs()
    {
        return $this->hasMany('App\BabyReserva','id_usuario');
    }

    public function reservats()
    {
        return $this->hasMany('App\TenisReserva','id_usuario');
    }
}
