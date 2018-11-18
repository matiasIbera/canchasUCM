<?php

namespace App\Http\Controllers;

use App\BabyReserva;
use App\User;
use App\HorarioBaby;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class BabyReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = BabyReserva::orderBy('id','ASC')->paginate(5);


        return view('admin.babyreservas.index')
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
        $horarios = HorarioBaby::orderBy('id','ASC')
        ->pluck('hora','id');
        return view('admin.babyreservas.create')
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
        $reservas = BabyReserva::where('fecha_reserva',$fecha_reserva)->get();

         //funcion para que las fechas sean actuales
        //dd('segundo reserva:'.time($fecha_reserva).'- segundo actual:'.time());
        //if(time($fecha_reserva) < time()){
          //  $problema=true;
            //Flash::error('La fecha no es actual');
            //redirect()->route('babyreservas.index');
        //}

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
        return redirect()->route('babyreservas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BabyReserva  $babyReserva
     * @return \Illuminate\Http\Response
     */
    public function show(BabyReserva $babyReserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BabyReserva  $babyReserva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = BabyReserva::find($id);
        $usuarios = User::orderBy('id','ASC')
        ->pluck('name','id');
        $horarios = HorarioBaby::orderBy('id','ASC')
        ->pluck('hora','id');
        return view('admin.babyreservas.edit')
        ->with('usuarios',$usuarios)
        ->with('horarios',$horarios)
        ->with('reserva',$reserva);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BabyReserva  $babyReserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));

        $reserva = BabyReserva::find($id);
        
        $reserva->id_usuario = $request->id_usuario;
        $reserva->id_horario = $request->id_horario;
        $reserva->fecha_reserva = $fecha_reserva;
        
        $reserva->save();

        flash::warning('La reserva ha sido modificada');
        return redirect()->route('babyreservas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BabyReserva  $babyReserva
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $reserva = BabyReserva::find($id);
        $reserva->delete();

        flash::error('La reserva ha sido eliminada');

        return redirect()->route('babyreservas.index');
    }
}
