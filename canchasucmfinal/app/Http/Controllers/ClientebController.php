<?php

namespace App\Http\Controllers;
use App\User;
use App\Carrera;
use App\BabyReserva;
use App\HorarioBaby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
class ClientebController extends Controller
{
  
    public function reserva()
    {
        $user = User::find(Auth::User()->id);
        $horariobaby = HorarioBaby::orderBy('hora','id')->pluck('hora','id');
        return view('cliente.reservas.indexb')
        ->with('horariobaby',$horariobaby)
        ->with('user',$user);
    }

        //selecciono una fecha y la lleva a guarda fecha
    public function mostrar_reserva()
    {
        return view('cliente.reservas.mostrarb');
    }

    //toma la fecha que seleccione y las compara con las reservas
    public function guarda_fecha(Request $request)
    {
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));
        $reservas = BabyReserva::where('fecha_reserva',$fecha_reserva)->get();
        //dd($reservas);
        return view('cliente.reservas.reservasbaby')->with('reservas',$reservas);
    }

        public function crear_reserva()
    {
        $user = User::find(Auth::User()->id);
        $horarios = HorarioBaby::orderBy('id','ASC')
        ->pluck('hora','id');
        return view('cliente.reservas.createb')
        ->with('user',$user)
        ->with('horarios',$horarios);
    }

    public function guardar_reserva(Request $request)
    {
        $problema = false;

        $user = User::find(Auth::User()->id);
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));
        $reservas = BabyReserva::where('fecha_reserva',$fecha_reserva)->get();

        //preguntar si es unica
        foreach($reservas as $reserva){
            if($reserva->id_horario == $request->id_horario){
                $problema=true;
                Flash::error('La reserva ya existe');
                break;
            }
        }
       
        if($problema == false){
            $reserva = new BabyReserva();
            $reserva->id_usuario = $request->id_usuario;
            $reserva->id_horario = $request->id_horario;
            $reserva->fecha_reserva = $fecha_reserva;
            $reserva->save();
             Flash::success('La reserva ha sido ingresada con éxito');
        }

        

        return redirect()->route('clienteb.reserva');
    }
}
