@extends('admin.template.main')

@section('title','Crear Horario')

@section('content')
@section('content')
	@if(count($errors) > 0)
		<div class="alert alert-danger" role = "alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif



	<div>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#new_horario"> <i class="fas fa-plus"></i></button>
</div>
    <div class="modal fade" id="new_horario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Añadir Horario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  {!! Form::open(['route' => 'tenishorarios.store', 'method' => 'POST']) !!}
              
                  <div class="form-group">
                      {!! Form::label('hora', 'Ingrese la hora') !!}
                      <div class="row">
                        <div class="col-sm">
                          {!! Form::select('hora', array(
                            '8:00' => '8:00', 
                            '9:00' => '9:00', 
                            '10:00' => '10:00', 
                            '11:00' => '11:00', 
                            '12:00' => '12:00', 
                            '13:00' => '13:00', 
                            '14:00' => '14:00', 
                            '15:00' => '15:00', 
                            '16:00' => '16:00', 
                            '17:00' => '17:00',
                            '18:00' => '18:00', 
                            '19:00' => '19:00', 
                            '20:00' => '20:00', 
                            '21:00' => '21:00', 
                            ), null, ['class' => 'form-control', 'placeholder' => 'Hora', 'required']) !!}
                        </div>
                        
                      </div>
                  </div>
                  <center>
                    <div class="form-group">
                      {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                    </div>
                  </center>
                  <br>
              
              {!! Form::close() !!}
              </div>
            </div>
          </div>
     </div>

</div>


@endsection