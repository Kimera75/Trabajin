@extends('templates.principal')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-5">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Pantalla de inicio</h3>
		  	</div>
		  	<div class="panel-body">
		    	<form action="">
		    		<div class="form-group">
		    			<label for="">Titulo:</label>
		    			<div class="input-group">
		    				<textarea name="" id="" cols="30" rows="5" style="resize: none;" class="form-control"></textarea>
		    			</div>
		    			<div class="form-group">
		    				<div class="col-xs-4 col-sm-4 col-md-4">
		    					<label for="" class="mg-top">Nombre del Lab.:</label>
		    					<label class="mg-top">Departamento:</label>
		    					<label class="mg-top">Coordinador(a):</label>
		    					<label class="mg-top">Contacto:</label>
		    				</div>
		    				<div class="col-xs-5 col-sm-5 col-md-6 col-md-offset-2">
		    					<input type="text" class="form-control mg-top">
		    					<input type="text" class="form-control mg-top">
		    					<input type="text" class="form-control mg-top">
		    					<textarea name="" id="" cols="10" rows="2" style="resize: none;" class="form-control mg-top"></textarea>
		    				</div>
		    				<div class="pull-right mg-top">
		    					<button class="btn btn-primary">Guardar cambios</button>
		    				</div>
		    			</div>
		    		</div>
		    	</form>
		  	</div>
		</div>		
	</div>

	<div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1">
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Imagen de incio</h3>
		  	</div>
		  	<div class="panel-body">
		  		<figure>
		  			<img src="/img/index.jpg" alt="" class="img-responsive"/>
		  		</figure>
		  		<form action="">
		  			<div class="form-group mg-top">
		  				<label for="">Escoge la imagen</label>
		  				<input type="file">		  				
		  			</div>
		  			<button class="btn btn-primary mg-top">Guardar cambios</button>
		  		</form>		    	
		  	</div>
		</div>		
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		@if(Session::has('career'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  {{Session::get('career')}}
			</div>
		@endif
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Agregar carreras</h3>
		  	</div>
		  	<div class="panel-body">
		  		{{-- Add Career --}}
		  		{!!Form::open(array('action' => 'AppController@addCareer', 'method' => 'POST'))!!}	
		  			<div class="form-group mg-top">
		  				{!!Form::text('name',null,array('class' => 'form-control', 'id' => 'updateCareertxt'))!!}		  				
		  			</div>		  	
		  			{!!Form::submit('Agregar',array('class'=>'btn btn-primary', 'id' => 'addCareerBtn'))!!}
	  			{!!Form::close()!!}	
		  			
		  			<div class="table-responsive mg-top">
		  				<table class="table table-striped">
		  					<thead>		  						
		  						<th>Carrera</th>
		  						<th>Acciones</th>
		  					</thead>
		  					<tbody>
		  						@foreach($carreras as $car)
		  						<tr>								
									<td>{{$car->name}}</td>
									<td>{!!link_to_action('AppController@deleteCareer', $title = 'Eliminar', $parameters = $car->id, $attributes = array('class' => 'btn btn-danger'))!!}</td>
								</tr>
		  						@endforeach
		  					</tbody>
		  				</table>
	  				</div>
		  	</div>
		</div>		
	</div>
</div>
@endsection