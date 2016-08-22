@extends('templates.admin')

@section('content')

<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 mg-top">
	<div class="panel panel-default">
	  	<div class="panel-heading text-center">
	    	<h3 class="panel-title">Create an account</h3>
	  	</div>
	  	<div class="panel-body">
	  		{!!Form::open(array('action' => 'LoginController@create', 'method' => 'POST'))!!}		    	
	    		<div class="form-group">
	    			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 text-center">
		    			<label for="">Nombre Usuario:</label>
		    			<div class="input-group">
		    				<div class="input-group-addon">
		    					<span class="glyphicon glyphicon-user"></span>
		    				</div>
		    				{!!Form::text('name',null, array('class' => 'form-control', 'placeholder' => 'Nombre de usuario'))!!}
		    			</div>
	    			</div>		    			
	    		</div>
	    		<div class="form-group">
	    			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 text-center mg-top_2">
		    			<label for="">Email:</label>
		    			<div class="input-group">
		    				<div class="input-group-addon">
		    					<span class="glyphicon glyphicon-envelope"></span>
		    				</div>
		    				{!!Form::email('email',null, array('class' => 'form-control', 'placeholder' => 'Nombre de usuario'))!!}
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
	    		<div class="form-group">
	    			<div class="col-xs-12 col-sm-12 col-md-12 mg-top_3 text-center">
	    				{!!Form::submit('Crear Cuenta', array('class' => 'btn app-btn'))!!}
	    			</div>	    			
	    		</div>
    		{!!Form::close()!!}
	  	</div>
	</div>
</div>

@endsection