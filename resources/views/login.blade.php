<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
</head>
<body>

	<div class="hidden" id="nowLoading">
		<div class="centrarLoading">
			<i class="fa fa-spinner fa-spin fa-4x fa-fw"></i>
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 section-header">
		<figure class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-4">
			<img src="img/logo.jpg" alt="" class="img-responsive">
		</figure>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3 mg-top">
		<div class="panel panel-default">
		  	<div class="panel-heading text-center">
		    	<h3 class="panel-title">Login</h3>
		  	</div>
		  	<div class="panel-body">
		    	<form action="">
		    		<div class="form-group">
		    			<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 text-center">
			    			<label for="">Usuario:</label>
			    			<div class="input-group">
			    				<div class="input-group-addon">
			    					<span class="glyphicon glyphicon-user"></span>
			    				</div>
			    				<input type="text" class="form-control" placeholder="Nombre de usuario"/>
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
			    				<input type="text" class="form-control" placeholder="Contraseña"/>
			    			</div>
		    			</div>		    			
		    		</div>
		    		<div class="form-group">
		    			<div class="col-xs-12 col-sm-12 col-md-12 mg-top_3 text-center">
		    				<button type="button" id="test" class="btn app-btn">Entrar</button>
		    			</div>
		    		</div>
		    	</form>
		  	</div>
		</div>
	</div>
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/login.js"></script>
</body>
</html>