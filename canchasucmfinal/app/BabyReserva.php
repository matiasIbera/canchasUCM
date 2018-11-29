<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BabyReserva extends Model
{
    protected $table = 'babyreservas';

    protected $fillable = [
    	'id',
    	'id_usuario',
        'id_horario1',
        'id_horario2',
    	'fecha_reserva',
    ];


    public function user()
    {
    	return $this->belongsTo('App\User','id_usuario');
    }

    public function horariobaby()
    {
    	return $this->belongsTo('App\HorarioBaby','id_horario1');
    }

    public function horariobaby2()
    {
        return $this->belongsTo('App\HorarioBaby','id_horario2');
    }
}
