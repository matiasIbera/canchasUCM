@extends('admin.template.main')

@section('title', 'Horarios cancha de Baby Fútbol')

@section('content')

	<a href="{{ route('babyhorarios.create') }}" class="btn btn-info" > Crear nuevo horario</a>
	<br><br>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Hora</th>
	      <th scope="col"> Acción</th>
	    </tr>
	  </thead>
	  <tbody>
	  	 
	  	@foreach( $horarios as $horario)

	  		<tr>
	  			<td>{{ $horario -> id}} </td>
	  			<td>{{ $horario -> hora}} </td>
	  			<td><a href="{{ route('babyhorarios.destroy', $horario->id) }}"  onclick="return confirm('¿Seguro que deseas eliminarlo?')"  class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i></a> 
	  				<a href="{{ route('babyhorarios.edit', $horario->id) }}" class="btn btn-outline-warning"> <i class="fas fa-cog"></i>	 </a></td>
	  		</tr>
	  	@endforeach
	  </tbody>
	</table>
		<div class="text-center">
		{!! $horarios->render()!!}
		
	</div>
@endsection