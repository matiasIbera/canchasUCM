<?php

namespace App\Http\Controllers;

use App\TenisReserva;
use App\User;
use App\HorarioTenis;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class TenisReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = TenisReserva::orderBy('id','ASC')->paginate(5);
        $reservas->each(function($reservas){
            $reservas->usuarioid_usuario;
            
        });

        $reservas->each(function($reservas){
            $reservas->horarios;
        });

        return view('admin.tenisreservas.index')
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
        $horarios = HorarioTenis::orderBy('id','ASC')
        ->pluck('hora','id');
        return view('admin.tenisreservas.create')
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
        $reservas = TenisReserva::where('fecha_reserva',$fecha_reserva)->get();

        //preguntar si es unica
        foreach($reservas as $reserva){
            if($reserva->id_horario == $request->id_horario){
                $problema=true;
                 Flash::error('La reserva ya existe');
                break;
            }
        }
               
        if($problema == false){
            $reserva = new TenisReserva();
            $reserva->id_usuario = $request->id_usuario;
            $reserva->id_horario = $request->id_horario;
            $reserva->fecha_reserva = $fecha_reserva;
            $reserva->save();
             Flash::success('La reserva ha sido ingresada con éxito');
        }




        return redirect()->route('tenisreservas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TenisReserva  $tenisReserva
     * @return \Illuminate\Http\Response
     */
    public function show(TenisReserva $tenisReserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TenisReserva  $tenisReserva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = TenisReserva::find($id);
        $usuarios = User::orderBy('id','ASC')
        ->pluck('name','id');
        $horarios = HorarioTenis::orderBy('id','ASC')
        ->pluck('hora','id');
        return view('admin.tenisreservas.edit')
        ->with('usuarios',$usuarios)
        ->with('horarios',$horarios)
        ->with('reserva',$reserva);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TenisReserva  $tenisReserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));

        $reserva = TenisReserva::find($id);
        
        $reserva->id_usuario = $request->id_usuario;
        $reserva->id_horario = $request->id_horario;
        $reserva->fecha_reserva = $fecha_reserva;
        
        $reserva->save();

        flash::warning('La reserva ha sido modificada');
        return redirect()->route('tenisreservas.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TenisReserva  $tenisReserva
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $reserva = TenisReserva::find($id);
        $reserva->delete();

        flash::error('La reserva ha sido eliminada');

        return redirect()->route('tenisreservas.index');
    }
}
