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
        $reserva = BabyReserva::orderBy('fecha_reserva','ASC');
        return view('cliente.reservas.indexb')
        ->with('reserva',$reserva)
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
                //preguntar si es fecha actual
                $fecha_actual =(date("Y-m-d",time()));
                if($fecha_actual > $fecha_reserva){
                    flash::error('Ingrese una fecha valida');
                    return redirect()->route('cliente.mostrarb');
                }
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
        $hoy = getdate();
                //preguntar si es fecha actual
                $fecha_actual =(date("Y-m-d",time()));
                if($fecha_actual > $fecha_reserva){
                    flash::error('Ingrese una fecha valida');
                    return redirect()->route('cliente.reservab.create');
                }

        //preguntar si es unica
        foreach($reservas as $reserva){
            if($reserva->id_horario1 == $request->id_horario1){
                $problema=true;
                Flash::error('La reserva ya existe');
                break;
            }else{
                if($reserva->id_horario2 > $request->id_horario1){
                    $problema=true;
                    Flash::error('La reserva ya existe');
                    break;
                } else{
                    $problema = false;
                }
            }
        }
       
        if($problema == false){
            $reserva = new BabyReserva();
            $reserva->id_usuario = $request->id_usuario;
            $reserva->id_horario1 = $request->id_horario1;
            $reserva->id_horario2 = $request->id_horario2;
            $reserva->fecha_reserva = $fecha_reserva;
                                    //validador de que el horario fin tiene que ser mayor al horario inicial
                                    if($reserva->id_horario1 == $reserva->id_horario2){
                                        flash::error('La hora fin debe ser superior a la hora inicio');
                                        return redirect()->route('cliente.reservab.create');
                                    } else{
                                        if($reserva->id_horario1 > $reserva->id_horario2){
                                            flash::error('La hora fin debe ser superior a la hora inicio');
                                            return redirect()->route('cliente.reservab.create');
                                        }
                                    }
            //

            if($fecha_actual == $fecha_reserva){
                if($reserva->id_horario1 == 1){
                    if($hoy['hours'] -3 >= '08'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 2){
                    if($hoy['hours'] -3 >= '09'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 3){
                    if($hoy['hours'] -3 >= '10'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 4){
                    if($hoy['hours'] -3 >= '11'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 5){
                    if($hoy['hours'] -3 >= '12'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 6){
                    if($hoy['hours'] -3 >= '13'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 7){
                    if($hoy['hours'] -3 >= '14'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 8){
                    if($hoy['hours'] -3 >= '15'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 9){
                    if($hoy['hours'] -3 >= '16'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 10){
                    if($hoy['hours'] -3 >= '17'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 11){
                    if($hoy['hours'] -3 >= '18'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 12){
                    if($hoy['hours'] -3 >= '19'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 13){
                    if($hoy['hours'] -3 >= '20'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
                if($reserva->id_horario1 == 14){
                    if($hoy['hours'] -3 >= '21'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reservab.create');
                    }
                }
            }
            $reserva->save();
             Flash::success('La reserva ha sido ingresada con éxito');
        }

        

        return redirect()->route('clienteb.reserva');
    }
}
