<?php

namespace App\Http\Controllers;

use App\User;
use App\Carrera;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::orderBy('id','ASC')->paginate(5);
        $usuarios->each(function($usuarios){
            $usuarios->carreras;
        });

        return view('admin.usuarios.index')
        ->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carreras = Carrera::orderBy('id','ASC')
        ->pluck('nombre','id');
        return view('admin.usuarios.create')
        ->with('carreras',$carreras);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $usuario = new User($request->all());
        $usuario->save();

        flash::success('El usuario ha sido registrado');

        return redirect()->route('usuarios.index');
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
        $usuario = User::find($id);
       // $usuario->carrera();
        $carreras = Carrera::orderBy('id','ASC')
        ->pluck('nombre','id');
        return view('admin.usuarios.edit')
        ->with('carreras', $carreras)
        ->with('usuario',$usuario);
    }

      public function perfil($id)
    {
        //$usuario = User::find($id);
        // $usuario->carrera();
        //$carreras = Carrera::orderBy('id','ASC')
        //->pluck('nombre','id');
        //return view('admin.usuarios.edit')
        //->with('carreras', $carreras)
        //->with('usuario',$usuario);
        dd($id);
    }
    

    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        $usuario->name= $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->rut = $request->rut;
        $usuario->anio_ingreso = $request->anio_ingreso;
        $usuario->carrera_id = $request->carrera_id;
        $usuario->type = $request->type;
  
        $usuario->save();

        flash::warning('El usuario ha sido modificado');
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        flash::error('El usuario ha sido eliminado');

        return redirect()->route('usuarios.index');
    }
    
}
