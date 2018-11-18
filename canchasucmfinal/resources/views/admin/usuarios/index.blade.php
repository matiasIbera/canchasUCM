@extends('admin.template.main')

@section('title','Usuarios')

@section('content')
	<a href="{{ route('usuarios.create')}}" class="btn btn-info"> Registrar nuevo usuario</a>
	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Rut</th>
			<th>Correo</th>
			<th>Carrera</th>
			<th>Tipo</th>
			<th>Acciones</th>

		</thead>
		<tbody>

			@foreach($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->id}}</td>
					<td>{{ $usuario->name}}</td>
					<td>{{ $usuario->apellido}}</td>
					<td>{{$usuario->rut}}</td>
					<td>{{ $usuario->email}}</td>
					<td>{{ $usuario->carrera->nombre }}</td>
					<td>{{$usuario->type}}</td>
					<td><a href="{{ route('usuarios.destroy', $usuario->id) }}"  onclick="return confirm('¿Seguro que deseas eliminarlo?')"  class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i></a> 
	  				<a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-outline-warning"> <i class="fas fa-cog"></i>	 </a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! $usuarios->render()!!}
		
	</div>
		
@endsection