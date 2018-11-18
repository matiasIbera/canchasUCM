@extends('admin.template.main')

@section('title','Reservas cancha de tenis')

@section('content')
	<a href="{{ route('tenisreservas.create')}}" class="btn btn-info"> Nueva reserva</a>
	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
			<th>Horario</th>
			<th>Fecha</th>
			<th>Acciones</th>

		</thead>
		<tbody>

			@foreach($reservas as $reserva)
				<tr>
					<td>{{ $reserva->id}}</td>
					<td>{{ $reserva->user->name}}</td>
					<td>{{$reserva->user->apellido}}</td>
					<td>{{$reserva->user->email}}</td>
					<td>{{ $reserva->horariotenis->hora}}</td>
					<td>{{ $reserva->fecha_reserva}}</td>
					<td><a href="{{ route('tenisreservas.destroy',$reserva->id)}}"  onclick="return confirm('¿Seguro que deseas eliminarlo?')"  class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i></a> 
	  				<a href="{{route('tenisreservas.edit', $reserva->id)}}" class="btn btn-outline-warning"> <i class="fas fa-cog"></i>	 </a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! $reservas->render()!!}
		
	</div>
		
@endsection
