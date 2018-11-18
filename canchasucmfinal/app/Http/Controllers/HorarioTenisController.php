<?php

namespace App\Http\Controllers;

use App\HorarioTenis;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\HTRequest;

class HorarioTenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = HorarioTenis::orderBy('id','ASC')->paginate(6);
        return view('admin.tenis.index')
        ->with('horarios', $horarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.tenis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HTRequest $request)
    {
        $horario = new HorarioTenis($request->all());
        $horario ->save();
        
        flash::success('se ha registrado una nueva hora');
        return redirect()-> route('tenishorarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HorarioTenis  $horarioTenis
     * @return \Illuminate\Http\Response
     */
    public function show(HorarioTenis $horarioTenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HorarioTenis  $horarioTenis
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $horario = HorarioTenis::find($id);
        return view('admin.tenis.edit')
        ->with('horario', $horario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HorarioTenis  $horarioTenis
     * @return \Illuminate\Http\Response
     */
    public function update(HTRequest $request, $id)
    {
        $horario = HorarioTenis::find($id);
        $horario->hora= $request->hora;
        $horario->save();

        flash::warning('El horario ha sido modificado');
        return redirect()->route('tenishorarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HorarioTenis  $horarioTenis
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $horario = HorarioTenis::find($id);
        $horario -> delete();
        flash::error('Horario eliminado');
        return redirect()->route('tenishorarios.index');
    }
}
