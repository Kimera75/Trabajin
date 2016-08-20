@extends('templates.principal')

@section('content')
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6">
		@if(Session::has('application'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  {{Session::get('application')}}
			</div>
		@endif
		<div class="panel panel-default">
		  	<div class="panel-heading">
		    	<h3 class="panel-title">Pantalla de inicio</h3>
		  	</div>
		  	<div class="panel-body">
		  		{!!Form::model($app,array('action' => array('AppController@updateApp', isset($app) ? $app->id : "1"),'method' => 'POST'))!!}
		    		<div class="form-group">
		    			<label for="">Titulo:</label>
		    			<div class="input-group">		    				
		    				{!!Form::textarea('title',null,array('class' => 'form-control', 'style' => 'resize:none;', 'size' => '30x5','placeholder' => 'Titulo de la aplicacion'))!!}		    				
		    			</div>
		    			<div class="form-group">
		    				<div class="col-xs-4 col-sm-4 col-md-4">
		    					<label for="" class="mg-top">Nombre del Lab.:</label>
		    					<label class="mg-top">Departamento:</label>
		    					<label class="mg-top">Coordinador(a):</label>
		    					<label class="mg-top">Contacto:</label>
		    				</div>
		    				<div class="col-xs-5 col-sm-5 col-md-6 col-md-offset-2">
								{!!Form::text('name_lab',null,array('class' => 'form-control mg-top', 'placeholder' => 'Nombre del laboratorio'))!!}
								{!!Form::text('dep',null,array('class' => 'form-control mg-top','placeholder' => 'Departamento al que pertenece'))!!}

								{!!Form::text('coord',null,array('class' => 'form-control mg-top','placeholder' => 'Nombre de(la) Coordinador(a)'))!!}
								{!!Form::textarea('contac',null,array('class' => 'form-control mg-top', 'style' => 'resize:none;', 'size' => '30x5','placeholder' => 'Contacto telefonico o email'))!!}
		    				</div>
		    				<div class="pull-right mg-top">
		    					{!!Form::submit('Guardar cambios', array('class' => 'btn btn-primary'))!!}
		    				</div>
		    			</div>
		    		</div>
		    	{!!Form::close()!!}		    	
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
			  		<div class="col-xs-12 col-sm-6 col-md-6">
			  			<div class="form-group mg-top">
			  				{!!Form::text('name',null,array('class' => 'form-control', 'id' => 'updateCareertxt'))!!}
			  			</div>
		  			</div>
		  			<div class="col-xs-12 col-sm-12 col-md-12">
		  				{!!Form::submit('Agregar',array('class'=>'btn btn-primary', 'id' => 'addCareerBtn'))!!}
		  			</div>
	  			{!!Form::close()!!}	
		  			
		  			<div class="table-responsive mg-top col-xs-12 col-sm-12 co-md-12">
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