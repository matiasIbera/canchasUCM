<?php

namespace App\Http\Controllers;

use App\Horario;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\HFRequest;
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::orderBy('id', 'ASC')->paginate(6);
       return view('admin.futbols.index')
       ->with('horarios', $horarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.futbols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HFRequest $request)
    {
        $horario = new Horario($request->all());
        $horario ->save();
        
        flash::success('se ha registrado una nueva hora');
        return redirect()-> route('futbolhorarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function show(Horario $horario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::find($id);
        return view('admin.futbols.edit')
        ->with('horario', $horario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function update(HFRequest $request, $id)
    {
        $horario = Horario::find($id);
        $horario->hora= $request->hora;
        $horario->save();

        flash::warning('El horario ha sido modificado');
        return redirect()->route('futbolhorarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $horario = Horario::find($id);
        $horario -> delete();
        flash::error('Horario eliminado');
        return redirect()->route('futbolhorarios.index'); 
    }
}
