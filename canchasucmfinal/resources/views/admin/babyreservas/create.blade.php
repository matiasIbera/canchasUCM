@extends('admin.template.main')

@section('title', 'Reserva cancha de Baby fútbol')

@section('content')
	{!! Form::open(['route' => 'babyreservas.store', 'method' => 'POST']) !!}

		<div class="form-group">
			
			{!! Form::label('id_usuario','Usuario') !!}
			{!! Form::select('id_usuario', $usuarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
				<br>

			{!! Form::label('hora','Hora inicio') !!}
			{!! Form::select('id_horario1', $horarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
				<br>
			
			{!! Form::label('hora','Hora fin') !!}
			{!! Form::select('id_horario2', $horarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
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