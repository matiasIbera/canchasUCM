<?php

namespace App\Http\Controllers;

use App\User;
use App\Carrera;
use App\Reserva;
use App\Horario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //muestra las reservas de futbol del usuario
    public function reserva()
    {
        $user = User::find(Auth::User()->id);
        $carrera = Carrera::orderBy('id', 'ASC')
        ->pluck('nombre', 'id');

        return view('cliente.reservas.index')
        ->with('user', $user)
        ->with('carreras', $carrera);
    }

    //selecciono una fecha y la lleva a guarda fecha
    public function mostrar_reserva()
    {
        return view('cliente.reservas.mostrar');
    }

    //toma la fecha que seleccione y las compara con las reservas
    public function guarda_fecha(Request $request)
    {
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));
        $reservas = Reserva::where('fecha_reserva',$fecha_reserva)->get();
        //preguntar si es fecha actual
        $fecha_actual =(date("Y-m-d",time()));
        if($fecha_actual > $fecha_reserva){
            flash::error('Ingrese una fecha valida');
            return redirect()->route('cliente.mostrar');
        }
        //dd($reservas);
        return view('cliente.reservas.reservasfutbol')->with('reservas',$reservas);
    }

    public function crear_reserva()
    {
        $user = User::find(Auth::User()->id);
        $horarios = Horario::orderBy('id','ASC')
        ->pluck('hora','id');
        return view('cliente.reservas.create')
        ->with('user',$user)
        ->with('horarios',$horarios);
    }

    public function guardar_reserva(Request $request)
    {
        $problema = false;

        $user = User::find(Auth::User()->id);
        $fecha_reserva = date('Y-m-d', strtotime($request->fecha_reserva));
        $reservas = Reserva::where('fecha_reserva',$fecha_reserva)->get();
        $hoy = getdate();
                //preguntar si es fecha actual
                $fecha_actual =(date("Y-m-d",time()));
                if($fecha_actual > $fecha_reserva){
                    flash::error('Ingrese una fecha valida');
                    return redirect()->route('cliente.reserva.create');
                }

        //preguntar si es unica
        foreach($reservas as $reserva){
            if($reserva->id_horario == $request->id_horario){
                $problema=true;
                Flash::error('La reserva ya existe');
                break;
            }
        }
       
        if($problema == false){
            $reserva = new Reserva();
            $reserva->id_usuario = $request->id_usuario;
            $reserva->id_horario = $request->id_horario;
            $reserva->fecha_reserva = $fecha_reserva;
            //
            if($fecha_actual == $fecha_reserva){
                if($reserva->id_horario == 1){
                    if($hoy['hours'] -3 >= '08'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 2){
                    if($hoy['hours'] -3 >= '09'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 3){
                    if($hoy['hours'] -3 >= '10'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 4){
                    if($hoy['hours'] -3 >= '11'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 5){
                    if($hoy['hours'] -3 >= '12'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 6){
                    if($hoy['hours'] -3 >= '13'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 7){
                    if($hoy['hours'] -3 >= '14'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 8){
                    if($hoy['hours'] -3 >= '15'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 9){
                    if($hoy['hours'] -3 >= '16'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 10){
                    if($hoy['hours'] -3 >= '17'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 11){
                    if($hoy['hours'] -3 >= '18'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 12){
                    if($hoy['hours'] -3 >= '19'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 13){
                    if($hoy['hours'] -3 >= '20'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
                if($reserva->id_horario == 14){
                    if($hoy['hours'] -3 >= '21'){
                        flash::error('ingrese una hora valida');
                        return redirect()->route('cliente.reserva.create');
                    }
                }
            }
            $reserva->save();
             Flash::success('La reserva ha sido ingresada con éxito');
        }

        

        return redirect()->route('cliente.reserva');
    }

}
