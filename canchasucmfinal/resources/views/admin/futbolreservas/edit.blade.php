@extends('admin.template.main')

@section('title', 'Editar reserva cancha de Fútbol')

@section('content')
	{!! Form::open(array('route' => ['futbolreservas.update',$reserva->id], 'method' => 'PUT')) !!}

		<div class="form-group">
			
			{!! Form::label('id_usuario','Usuario') !!}
			{!! Form::select('id_usuario', $usuarios, $reserva->id_usuario, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
				<br>

			{!! Form::label('hora','Hora incio') !!}
			{!! Form::select('id_horario1', $horarios, $reserva->id_horario1, ['class' => 'form-control', 'placeholder' => 'Seleccione una hora', 'required']) !!}
				<br>
			{!! Form::label('hora','Hora fin') !!}
			{!! Form::select('id_horario2', $horarios, $reserva->id_horario2, ['class' => 'form-control', 'placeholder' => 'Seleccione una hora', 'required']) !!}
				<br>

			{!! Form::label('nombre', 'Fecha de reserva') !!}
            {!! Form::input('text', 'fecha_reserva', $reserva->fecha_reserva, ['class' => 'form-control datepicker', 'placeholder' => 'Seleccione un dia', 'required']) !!}
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