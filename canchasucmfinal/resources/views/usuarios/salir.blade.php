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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{route('/')}}">Salir <span class="sr-only">(current)</span></a>
	      </li>


	      <!-- Registro --> 

	      <li class="nav-item active">
	        <a class="nav-link" href="{{ route('registro.create')}}">Reservar <span class="sr-only">(current)</span></a>
	      </li>


	    </ul>
	  </div>
	</nav>

</body>
</html>