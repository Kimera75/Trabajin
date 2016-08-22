@extends('templates.admin')

@section('content')
	<div class="hidden" id="nowLoading">
		<div class="centrarLoading">
			<i class="fa fa-spinner fa-spin fa-4x fa-fw"></i>
			<span class="sr-only">Loading...</span>
		</div>
	</div>	
	<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 mg-top">
		@if(Session::has('error'))
		<div class="alert alert-danger alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  {{Session::get('error')}}
		</div>
		@endif
		@if(Session::has('message'))
		<div class="alert alert-success alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  {{Session::get('message')}}
		</div>
		@endif
		<div class="panel panel-default">
		  	<div class="panel-heading text-center">
		    	<h3 class="panel-title">Login</h3>
		  	</div>
		  	<div class="panel-body">
		  		{!!Form::open(array('action' => 'LoginController@login', 'method' => 'POST'))!!}		    	
		    		<div class="form-group">
		    			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 text-center">
			    			<label for="">Usuario:</label>
			    			<div class="input-group">
			    				<div class="input-group-addon">
			    					<span class="glyphicon glyphicon-user"></span>
			    				</div>
			    				{!!Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'Email del usuario'))!!}
			    			</div>
		    			</div>		    			
		    		</div>
		    		<div class="form-group">
		    			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 text-center mg-top_2">
			    			<label for="">Contraseña:</label>
			    			<div class="input-group">
			    				<div class="input-group-addon">
			    					<span class="glyphicon glyphicon-lock"></span>
			    				</div>
			    				{!!Form::password('password', array('class' => 'form-control', 'placeholder' => 'Contraseña'))!!}
			    			</div>
		    			</div>		    			
		    		</div>
		    		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		    			<a href="{!!URL::to('/create-acc')!!}">Crear un perfil nuevo</a>
		    		</div>
		    		<div class="form-group">
		    			<div class="col-xs-12 col-sm-12 col-md-12 mg-top_3 text-center">
		    				{!!Form::submit('Enviar', array('class' => 'btn app-btn'))!!}
		    			</div>	    			
		    		</div>
	    		{!!Form::close()!!}
		  	</div>
		</div>
	</div>
@endsection