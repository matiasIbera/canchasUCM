@extends('admin.template.main')

@section('title','Reservas cancha de fútbol')

@section('content')
	<a href="{{ route('futbolreservas.create')}}" class="btn btn-info"> Nueva reserva</a>
	<table class="table table-striped">
		<thead>
			<th>Fecha</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Correo</th>
			<th>H. Inicio</th>
			<th>H. Fin</th>
			<th>Acciones</th>

		</thead>
		<tbody>

			@foreach($reservas as $reserva)
				<tr>
					<td>{{ $reserva->fecha_reserva}}</td>
					<td>{{ $reserva->user->name}}</td>
					<td>{{ $reserva->user->apellido}}</td>
					<td>{{ $reserva->user->email}}</td>
					<td>{{ $reserva->horario->hora}}</td>
					<td>{{ $reserva->horario2->hora}}</td>
					<td><a href="{{ route('futbolreservas.destroy',$reserva->id)}}"  onclick="return confirm('¿Seguro que deseas eliminarlo?')"  class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i></a> 
	  				<a href="{{route('futbolreservas.edit', $reserva->id)}}" class="btn btn-outline-warning"> <i class="fas fa-cog"></i>	 </a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{!! $reservas->links()!!}
		
	</div>
		
@endsection
