<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HorarioBaby extends Model
{
    protected $table = 'babyhorarios';

    protected $fillable =[
    	'id',
    	'hora'
    ];

        public function Babyreservas()
    {
    	return $this->hasMany('App\BabyReserva');
    }

    public function Babyreservas2()
    {
        return $this->hasMany('App\BabyReserva');
    }
}


