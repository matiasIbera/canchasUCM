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
	<div class="content">
	    <h1> Reservas de Baby fútbol del día </h1>		
	   
	        <table class="table table-hover">

	            <tbody>
	                <tr class="table-active">
	                <th scope="row">Nombre</th>
	                <th scope="row">Apellido</th>
	                <th scope="row"> Correo</th>
	                <td scope="row">Fecha</td>
	                <td scope="row">H. Inicio</td>
					<td scope="row">H. Fin</td>
	                </tr>
	                    
	            </tbody>
	        
	            <tbody>
	                    
	                @foreach($reservas as $reserva)
	                    <tr>
	                    <th scope="row">{{$reserva->user->name}}</th>
	                    <th scope="row">{{$reserva->user->apellido}}</th>
	                    <th scope="row">{{$reserva->user->email}}</th>
	                    <td>{{ $reserva->fecha_reserva }}</td>
	                    <td>{{ $reserva->horariobaby->hora }}</td>  
						<td>{{ $reserva->horariobaby2->hora }}</td>               
	                    </tr>      
	                @endforeach

	                

	            </tbody>
	        </table>
    </div>
    <a href="{{route('cliente.mostrarb')}}" class="btn btn-primary"> Preguntar por otra fecha</a>
    <a href="{{route('cliente.reservab.create')}}" class="btn btn-success">Reservar</a>
    <a href="{{route('home')}}" class="btn btn-warning"> Menú principal</a>
</body>
</html>
