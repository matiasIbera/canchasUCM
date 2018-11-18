<?php

namespace App\Http\Controllers;

use App\Carrera;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\CarreraRequest;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras = Carrera::orderBy('id', 'ASC')->paginate(5);
       return view('admin.carreras.index')
       ->with('carreras', $carreras);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarreraRequest $request)
    {
        $carrera = new Carrera($request->all());
        $carrera ->save();
        
        flash::success('se ha registrado una nueva carrera');
        return redirect()-> route('carreras.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Carrera $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrera = Carrera::find($id);
        return view('admin.carreras.edit')
        ->with('carrera', $carrera);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(CarreraRequest $request, $id)
    {
        $carrera = Carrera::find($id);
        $carrera->nombre= $request->nombre;
        $carrera->save();

        flash::warning('La carrera ha sido modificada');
        return redirect()->route('carreras.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $carrera = Carrera::find($id);
        $carrera -> delete();
        flash::error('Carrera eliminada');
        return redirect()->route('carreras.index'); 
    }
}
