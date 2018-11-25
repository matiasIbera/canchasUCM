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
	<div class="container">
		<br>
		<ul>
		<ul>
		<ul>
		<ul>
		<ul>
		<ul>
		<ul>
		<ul>
	    	<h1> Reservas de Fútbol del día </h1>			
	    </ul>
	    </ul>
	    </ul>
	    </ul>
	    </ul>
	    </ul>
	    </ul>
	    </ul>
	        <table class="table table-hover">

	            <tbody>
	                <tr class="table-active">
	                <th scope="row">#</th>
	                <th scope="row">Nombre</th>
	                <th scope="row">Apellido</th>
	                <th scope="row"> Correo</th>
	                <th scope="row"> Carrera</th>
	                <td scope="row">Fecha</td>
	                <td scope="row">Hora</td>
	                </tr>
	                    
	            </tbody>
	        
	            <tbody>
	                    
	                @foreach($reservas as $reserva)
	                    <tr>
	                    <th scope="row">{{ $reserva->id }}</th>
	                    <th scope="row">{{$reserva->user->name}}</th>
	                    <th scope="row">{{$reserva->user->apellido}}</th>
	                    <th scope="row">{{$reserva->user->email}}</th>
	                    <th scope="row"> {{$reserva->user->carrera->nombre}}</th>
	                    <td>{{ $reserva->fecha_reserva }}</td>
	                    <td>{{ $reserva->horario->hora }}</td>               
	                    </tr>      
	                @endforeach
                
	            </tbody>
	        </table>
	        		<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
						<a href="{{route('coordinador.otrafecha')}}" class="btn btn-primary"> Cambiar fecha</a>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
					<ul>
						<input type="button" class="btn btn-succsess" name="imprimir" value="Imprimir" onclick="window.print();">
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>
					</ul>	
    </div>
</body>
</html>