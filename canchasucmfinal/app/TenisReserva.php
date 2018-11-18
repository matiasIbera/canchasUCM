<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TenisReserva extends Model
{
    protected $table = 'tenisreservas';

    protected $fillable = [
    	'id',
    	'id_usuario',
    	'id_horario',
    	'fecha_reserva',
    ];


    public function user()
    {
    	return $this->belongsTo('App\User','id_usuario');
    }

    public function horariotenis()
    {
    	return $this->belongsTo('App\HorarioTenis','id_horario');
    }
}
