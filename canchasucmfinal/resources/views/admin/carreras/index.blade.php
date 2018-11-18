@extends('admin.template.main')

<center>
	@section('title', 'Lista de carreras')
</center>

@section('content')

	<center>
	<a href="{{ route('carreras.create') }}" class="btn btn-info"> Regitrar nueva carrera</a>
	<br><br>

	<div class="container">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Carrera</th>
	      <th scope="col"> Acción</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($carreras as $carrera)
	  		<tr>
	  			<td>{{ $carrera -> id}} </td>
	  			<td>{{ $carrera -> nombre}} </td>
	  			<td><a href="{{ route('carreras.destroy', $carrera->id) }}"  onclick="return confirm('¿Seguro que deseas eliminarlo?')"  class="btn btn-outline-danger"> <i class="fas fa-trash-alt"></i></a> 
	  				<a href="{{ route('carreras.edit', $carrera->id) }}" class="btn btn-outline-warning"> <i class="fas fa-cog"></i>	 </a></td>
	  		</tr>
	  	@endforeach
	  </tbody>
	</table>
	{!! $carreras->render()!!}

	</div>

	</center>

@endsection