@extends('admin.template.main')

@section('title', 'Reserva cancha de Fútbol')

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


	{!! Form::open(['route' => 'futbolreservas.store', 'method' => 'POST']) !!}

		<div class="form-group">
			
			{!! Form::label('id_usuario','Usuario') !!}
			{!! Form::select('id_usuario', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
				<br>

			{!! Form::label('hora','Hora') !!}
			{!! Form::select('id_horario', $horarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
				<br>

			{!! Form::label('nombre', 'Fecha de reserva') !!}
            {!! Form::input('text', 'fecha_reserva', null, ['class' => 'form-control datepicker', 'placeholder' => 'Seleccione un dia', 'required']) !!}
            <br>
			 {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

		</div>

			
	{!! Form::close() !!}

	<script>
        $(document).ready(function() {
            $('.datepicker').datepicker();
        });
    </script>
@endsection