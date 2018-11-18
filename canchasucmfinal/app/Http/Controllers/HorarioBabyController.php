<?php

namespace App\Http\Controllers;

use App\HorarioBaby;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\HBRequest;


class HorarioBabyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = HorarioBaby::orderBy('id','ASC')->paginate(6);
        return view('admin.babies.index')
        ->with('horarios', $horarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.babies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HBRequest $request)
    {
        $horario = new HorarioBaby($request->all());
        $horario ->save();
        
        flash::success('se ha registrado una nueva hora');
        return redirect()-> route('babyhorarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HorarioBaby  $horarioBaby
     * @return \Illuminate\Http\Response
     */
    public function show(HorarioBaby $horarioBaby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HorarioBaby  $horarioBaby
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $horario = HorarioBaby::find($id);
        return view('admin.babies.edit')
        ->with('horario', $horario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HorarioBaby  $horarioBaby
     * @return \Illuminate\Http\Response
     */
    public function update(HBRequest $request, $id)
    {
        $horario = HorarioBaby::find($id);
        $horario->hora= $request->hora;
        $horario->save();

        flash::warning('El horario ha sido modificado');
        return redirect()->route('babyhorarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HorarioBaby  $horarioBaby
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $horario = HorarioBaby::find($id);
        $horario -> delete();
        flash::error('Horario eliminado');
        return redirect()->route('babyhorarios.index'); 
    }
}
