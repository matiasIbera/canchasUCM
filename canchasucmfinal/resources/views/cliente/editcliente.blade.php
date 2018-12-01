@extends('layouts.app')


@section('title', 'Editar Usuario: ' . $usuario->name .$usuario->apellido)

@section('content')
	@if(count($errors) > 0)
		<div class="alert alert-danger" role = "alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(array('route' => ['editarcliente.update',$usuario->id], 'method' => 'PUT')) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $usuario->name, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
			<br>

			{!! Form::label('apellido','Apellido') !!}
			{!! Form::text('apellido', $usuario->apellido, ['class' => 'form-control', 'placeholder' => 'Apellido de usuario', 'required']) !!}
			<br>

			{!! Form::label('email','Correo electrónico') !!}
			{!! Form::text('email', $usuario->email, ['class' => 'form-control', 'placeholder' => 'ejemplo@hotmail.com', 'required']) !!}
			<br>

			{!! Form::label('rut','RUT') !!}
			{!! Form::text('rut', $usuario->rut, ['class' => 'form-control', 'placeholder' => 'RUT de usuario', 'required']) !!}
			<br>

			{!! Form::label('anio_ingreso','Año de ingreso') !!}
			{!! Form::text('anio_ingreso', $usuario->anio_ingreso, ['class' => 'form-control', 'placeholder' => 'Año de ingreso', 'required']) !!}

			<br>
			
			{!! Form::label('carrera_id','Carrera') !!}
			{!! Form::select('carrera_id', $carreras, $usuario->carrera_id, ['class' => 'form-control', 'placeholder' => 'Seleccione una carrera', 'required']) !!}
				<br>
			{!! Form::submit('editar', ['class' => 'btn btn-primary']) !!}

		</div>
			
	{!! Form::close() !!}
@endsection