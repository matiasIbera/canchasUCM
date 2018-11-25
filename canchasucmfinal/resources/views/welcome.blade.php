<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Canchas</title>
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><a class = "button btn btn-primary" href="{{ url('/home') }}">Home</a>
                    @else
                        <ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
                        <a class ="button btn btn-primary" href="{{ route('login') }}">Login</a>
                        <a class ="button btn btn-success" href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="container">
                <div class="title m-b-md">
                    <ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
                    <h1> CANCHAS UCM </h1>
                </div>
            </div>
            <!-- aqui quiero poner un container con un carrusel con imagenes de las canchas-->
<div class="jumbotron">
    <div class="card mb-3">
        <img style="height: 300px; width: 100%; display: block;" src="imagenes/tenis2.jpg">
    </div>  
</div>
            <!-- FIN CARRUSEL imagenes/tenis2.jpg-->
            <div class="links">
                <ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
                    <a class ="button btn btn-info" href="{{ url('/home') }}">Reservas</a>

                </div>
        </div>
    </body>
</html>
