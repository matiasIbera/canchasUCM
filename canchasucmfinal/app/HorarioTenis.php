<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioTenis extends Model
{
    protected $table = 'tenishorarios';

    protected $fillable =[
    	'id',
    	'hora'
    ];

    public function tenisreservas()
    {
        return $this->hasMany('App\tenisReserva');
    }
}
