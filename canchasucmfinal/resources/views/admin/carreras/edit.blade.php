@extends('admin.template.main')

@section('tittle','Crear carrera')

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


<div class="container">
	<center>
		{!! Form::open(array('route' => ['carreras.update',$carrera->id], 'method' => 'PUT')) !!}
			<div class="form-group">
				{!! Form::label('nombre', 'Nombre de la Carrera')!!}
				{!! Form::text('nombre', $carrera->nombre, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
				
			</div>

		{!! Form::close()!!}
	</center>
</div>
@endsection