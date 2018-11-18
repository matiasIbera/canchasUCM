@extends('admin.template.main')

@section('title', 'Agregar Usuario')

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


	{!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
			<br>

			{!! Form::label('apellido','Apellido') !!}
			{!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido de usuario', 'required']) !!}
			<br>

			{!! Form::label('email','Correo electrónico') !!}
			{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@hotmail.com', 'required']) !!}
			<br>

			{!! Form::label('password','Contraseña') !!}
			{!! Form::text('password',null,['class' => 'form-control', 'placeholder' => '******', 'required']) !!}
			<br>

			{!! Form::label('rut','RUT') !!}
			{!! Form::text('rut', null, ['class' => 'form-control', 'placeholder' => 'RUT de usuario', 'required']) !!}
			<br>

			{!! Form::label('anio_ingreso','Año de ingreso') !!}
			{!! Form::text('anio_ingreso', null, ['class' => 'form-control', 'placeholder' => 'Año de ingreso', 'required']) !!}

			<br>
			
			{!! Form::label('carrera_id','Carrera') !!}
			{!! Form::select('carrera_id', $carreras, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una carrera', 'required']) !!}
				<br>
			{!!Form::label('type','Tipo')!!}
			{!!Form::select('type',['member' => 'miembro','encargado'=>'encargado','admin' =>'administrador'])!!}
				<br>
			 {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}


		</div>
			
	{!! Form::close() !!}
@endsection