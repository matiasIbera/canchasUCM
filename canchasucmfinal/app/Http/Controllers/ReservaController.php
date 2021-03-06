<?php

namespace App\Http\Controllers;

use App\Reserva;
use App\User;
use App\Horario;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\ReservaRequest;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::orderBy('fecha_reserva','ASC')->paginate(5);

        return view('admin.futbolreservas.index')
        ->with('reservas',$reservas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::orderBy('id','ASC')
        ->pluck('name','id');
        $horarios = Horario::orderBy('id','ASC')
        ->pluck('hora','id');
        return view('admin.futbolreservas.create')
        ->with('usuarios',$usuarios)
        ->with('horarios',$horarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $problema = false;
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));
        $reservas = Reserva::where('fecha_reserva',$fecha_reserva)->get();
        $hoy = getdate();

        //preguntar si es fecha actual
        $fecha_actual =(date("Y-m-d",time()));
        if($fecha_actual > $fecha_reserva){
            flash::error('Ingrese una fecha valida');
            return redirect()->route('futbolreservas.index');
        }

        //preguntar si es unica
        foreach($reservas as $reserva){
            if($reserva->id_horario == $request->id_horario){
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
            $reserva = new Reserva();
            $reserva->id_usuario = $request->id_usuario;
            $reserva->id_horario1 = $request->id_horario1;
            $reserva->id_horario2 = $request->id_horario2;
            $reserva->fecha_reserva = $fecha_reserva;
            
            //validador de que el horario fin tiene que ser mayor al horario inicial
            if($reserva->id_horario1 == $reserva->id_horario2){
                flash::error('La hora fin debe ser superior a la hora inicio');
                return redirect()->route('futbolreservas.create');
            } else{
                if($reserva->id_horario1 > $reserva->id_horario2){
                    flash::error('La hora fin debe ser superior a la hora inicio');
                    return redirect()->route('futbolreservas.create');
                }
            }

            //validador de horarios superiores
            if($fecha_actual == $fecha_reserva){
                if($reserva->id_horario1 == 1){
                    if($hoy['hours'] -3 >= '08'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 2){
                    if($hoy['hours'] -3 >= '09'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 3){
                    if($hoy['hours'] -3 >= '10'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 4){
                    if($hoy['hours'] -3 >= '11'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 5){
                    if($hoy['hours'] -3 >= '12'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 6){
                    if($hoy['hours'] -3 >= '13'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 7){
                    if($hoy['hours'] -3 >= '14'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 8){
                    if($hoy['hours'] -3 >= '15'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 9){
                    if($hoy['hours'] -3 >= '16'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 10){
                    if($hoy['hours'] -3 >= '17'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 11){
                    if($hoy['hours'] -3 >= '18'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 12){
                    if($hoy['hours'] -3 >= '19'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 13){
                    if($hoy['hours'] -3 >= '20'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
                if($reserva->id_horario1 == 14){
                    if($hoy['hours'] -3 >= '21'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('futbolreservas.create');
                    }
                }
            }
            $reserva->save();
             Flash::success('La reserva ha sido ingresada con éxito');
        }

        

        return redirect()->route('futbolreservas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::find($id);
        $usuarios = User::orderBy('id','ASC')
        ->pluck('name','id');
        $horarios = Horario::orderBy('id','ASC')
        ->pluck('hora','id');
        return view('admin.futbolreservas.edit')
        ->with('usuarios',$usuarios)
        ->with('horarios',$horarios)
        ->with('reserva',$reserva);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));
        $reservas = Reserva::where('fecha_reserva',$fecha_reserva)->get();
        $reserva = Reserva::find($id);
        $problema = false;
        $fecha_actual =(date("Y-m-d",time()));
        //preguntar si es unica
        foreach($reservas as $reserva){
            if($reserva->id_horario1 == $request->id_horario1){
               if($reserva->id_horario2 == $request->id_horario2){
                    $problema=true;
                    Flash::error('La reserva ya existe');
                    break;
                }
            }
        }

        if($problema ==false){
            $reserva->id_usuario = $request->id_usuario;
            $reserva->id_horario1 = $request->id_horario1;
            $reserva->id_horario2 = $request->id_horario2;
            $reserva->fecha_reserva = $fecha_reserva;
            
            //validador de que el horario fin tiene que ser mayor al horario inicial
            if($reserva->id_horario1 == $reserva->id_horario2){
                flash::error('La hora fin debe ser superior a la hora inicio');
                return redirect()->route('futbolreservas.index');
            } else{
                if($reserva->id_horario1 > $reserva->id_horario2){
                    flash::error('La hora fin debe ser superior a la hora inicio');
                    return redirect()->route('futbolreservas.index');
                }
            }
        
            //validador de horarios superiores
                    if($fecha_actual == $fecha_reserva){
                        if($reserva->id_horario1 == 1){
                            if($hoy['hours'] -3 >= '08'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 2){
                            if($hoy['hours'] -3 >= '09'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 3){
                            if($hoy['hours'] -3 >= '10'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 4){
                            if($hoy['hours'] -3 >= '11'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 5){
                            if($hoy['hours'] -3 >= '12'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 6){
                            if($hoy['hours'] -3 >= '13'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 7){
                            if($hoy['hours'] -3 >= '14'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 8){
                            if($hoy['hours'] -3 >= '15'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 9){
                            if($hoy['hours'] -3 >= '16'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 10){
                            if($hoy['hours'] -3 >= '17'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 11){
                            if($hoy['hours'] -3 >= '18'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 12){
                            if($hoy['hours'] -3 >= '19'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 13){
                            if($hoy['hours'] -3 >= '20'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                        if($reserva->id_horario1 == 14){
                            if($hoy['hours'] -3 >= '21'){
                                flash::error('ingrese una hora valida');
                                return redirect()->route('futbolreservas.index');
                            }
                        }
                    }

            $reserva->save();

            flash::warning('La reserva ha sido modificada');
        }
        return redirect()->route('futbolreservas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id);
        $reserva->delete();

        flash::error('La reserva ha sido eliminada');

        return redirect()->route('futbolreservas.index');
    }
}
