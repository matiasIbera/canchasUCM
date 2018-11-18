<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';

    protected $fillable =[
    	'id',
    	'hora'
    ];

    // un horario tiene muchas reservas

    public function reservas()
    {
    	return $this->hasMany('App\Reserva');
    }
}
