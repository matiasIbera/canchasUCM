@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ver mis reservas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a  href="{{route('cliente.reserva')}}" class= "btn btn-primary"> Fútbol </a>

                    <a href="{{route('clienteb.reserva')}}" class="btn btn-primary"> Baby</a>

                    <a href="{{route('clientet.reserva')}}" class="btn btn-primary">Tenis</a>
                    
                </div>
            </div>

            <br>
            

        </div>
    </div>
</div>
@endsection
