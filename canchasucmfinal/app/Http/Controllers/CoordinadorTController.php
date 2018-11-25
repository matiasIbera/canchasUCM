<?php

namespace App\Http\Controllers;

use App\User;
use App\Carrera;
use App\TenisReserva;
use App\HorarioTenis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class CoordinadorTController extends Controller
{
    public function consulta_fecha(Request $request)
    {
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));
        $reservas = TenisReserva::where('fecha_reserva',$fecha_reserva)->get();
        //dd($reservas);
        return view('coordinador.reservastenis')->with('reservas',$reservas);
    }

    public function mostrar_fecha(){
        return view('coordinador.indext');
    }
}
