<!DOCTYPE html>
<html>
<head>
	<title>Reserva de baby futbol</title>
		<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css"  href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<!-- Fa-fa-icons -->
	<link rel="stylesheet" type="text/css"  href="{{ asset('font-awesome/css/fontawesome-all.css') }}">
	<!-- JQuery -->
	<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script> 
	<!-- Bootstrap -->
	<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
	<!-- Datepicker Files -->
	<link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
	<link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker.standalone.css')}}">
	<script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
	<!-- Languaje -->
	<script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
</head>
<body>
	@include('cliente.layouts.nav')
	<div class="panel-body">
				@include('flash::message')
				@yield('content')
			</div>
	@if(count($errors) > 0)
		<div class="alert alert-danger" role = "alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class = "container">	
	{!! Form::open(['route' => 'cliente.reserva.store', 'method' => 'POST']) !!}

		<div class="form-group">
			
			{!! Form::label('id_usuario','Nombre') !!}
			{!! Form::input('text', 'id_usuario' , $user->id, ['class' => 'form-control', 'placeholder' => 'Seleccione un usuario', 'required']) !!}
				<br>

			{!! Form::label('hora','Hora') !!}
			{!! Form::select('id_horario', $horarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un horario', 'required']) !!}
				<br>

			{!! Form::label('nombre', 'Fecha de reserva') !!}
            {!! Form::input('text', 'fecha_reserva', null, ['class' => 'form-control datepicker', 'placeholder' => 'Seleccione un dia', 'required']) !!}
            <br>
			 {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

		</div>

			
	{!! Form::close() !!}
	</div>

	<script>
        $(document).ready(function() {
            $('.datepicker').datepicker();
        });
    </script>
    <a href="{{route('home')}}" class="btn btn-warning"> Menú principal</a>
</body>
</html>