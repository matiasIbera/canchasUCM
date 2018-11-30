<!DOCTYPE html>
<html>
<head>
    <title> Mis reservas</title>
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
        @include('flash::message')
    @yield('content')
</head>
<body>
   @include('cliente.layouts.nav')
   <div class="container">
    <h1> Mis Reservas de Tenis</h1>         
        <table class="table table-hover">

            <tbody>
                <tr class="table-active">
                <td scope="row">Fecha</td>
                <td scope="row">Hora Inicio</td>
                <td scope="row">Hora Fin</td>
                </tr>
                    
            </tbody>
        
            <tbody>
                    
                @foreach($user->reservats()->orderBy('fecha_reserva','ASC')->get() as $reservat)
                    <tr>
                    <td>{{ $reservat->fecha_reserva }}</td>
                    <td>{{ $reservat->horariotenis->hora }}</td>
                    <td>{{ $reservat->horariotenis2->hora }}</td>               
                    </tr>      
                @endforeach

                

            </tbody>
        </table>
    </div>
    <div class = "container">
    <ul><ul><ul><ul><ul><ul><ul><ul><ul><ul>
    <a href="{{route('home')}}" class="btn btn-warning"> Menú principal</a>
    <a href="{{route('cliente.mostrart')}}" class="btn btn-success"> Reservar</a>
    </div>
</body>
</html>
