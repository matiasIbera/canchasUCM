<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';

    protected $fillable = [
    	'id',
    	'nombre'
    ];

    //una carrera tiene muchos usuarios
    public function usuarios()
    {

    	 return $this->hasMany('App\User');
    }

}
