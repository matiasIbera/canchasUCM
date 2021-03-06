<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';

    protected $fillable = [
    	'id',
    	'id_usuario',
        'id_horario1',
        'id_horario2',
    	'fecha_reserva',
    ];

//una reserva pertenece a un user
    public function user()
    {
    	return $this->belongsTo('App\User', 'id_usuario');
    }

    public function horario()
    {
    	return $this->belongsTo('App\Horario','id_horario1');
    }
    public function horario2()
    {
    	return $this->belongsTo('App\Horario','id_horario2');
    }
}
