<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<div class = "container">
	<h3><ul><ul><ul><ul><ul><ul><ul>Ingrese una fecha para mostrar las reservas</h3>
		{!! Form::open(['route' => 'cliente.guardafechab', 'method' => 'POST']) !!}

		<div class="form-group">

			{!! Form::label('nombre', 'Fecha a consultar') !!}
            {!! Form::input('text', 'fecha_reserva', null, ['class' => 'form-control datepicker', 'placeholder' => 'Seleccione un dia', 'required']) !!}
            <br>
			<ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
			 {!! Form::submit('Preguntar', ['class' => 'btn btn-primary']) !!}

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