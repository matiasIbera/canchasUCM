<?php

namespace App\Http\Controllers;
use App\User;
use App\Carrera;
use App\BabyReserva;
use App\Horariobaby;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;


class CoordinadorBController extends Controller
{
    public function consulta_fecha(Request $request)
    {
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));
        $reservas = BabyReserva::where('fecha_reserva',$fecha_reserva)->get();
        //dd($reservas);
        return view('coordinador.reservasbaby')->with('reservas',$reservas);
    }

    public function mostrar_fecha(){
        return view('coordinador.indexb');
    }
}
