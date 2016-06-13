@extends('layouts.principal')

@section('content')
	<div class="col-md-9 mg-top borde-left">
    		<div class="col-md-7 col-md-offset-1">
    			<form action="">
    				<div class="form-group">
    					<label for="Codigo">Codigo del Usuario:</label>
    					<div class="input-group">
    						<input type="text" class="form-control">
    						<span class="input-group-btn">
    							<button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    						</span>
    					</div>
    				</div>
    				<div class="form-group">
    					<label for="Nombre">Nombre del Usuario:</label>
    					<input type="text" class="form-control" disabled>
    				</div>
    				<div class="form-group">
    					<label for="Codigo">Codigo del Material:</label>
    					<div class="input-group">
    						<input type="text" class="form-control">
    						<span class="input-group-btn">
    							<button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    						</span>
    					</div>
    				</div>
    				<div class="form-group">
    					<label for="Nombre">Nombre del Material:</label>
    					<input type="text" class="form-control" disabled>
    				</div>
    				<div class="form-group">
    					<label for="Nombre">Fecha:</label>
    					<input type="date" class="form-control" disabled>
    				</div>
    				<div class="form-group">
    					<label for="Nombre">Fecha de entrega:</label>
    					<input type="date" class="form-control" disabled>
    				</div>
    				<input type="text" class="btn btn-success btn-md pull-right mg-top" value="Realizar Préstamo">
    			</form>
    		</div>
    		<div class="col-md-4">
    			<fieldset>
    				<legend>Sanciones</legend>
    				<ul class="styless">
    					<li>
    						<h5><span class="glyphicon glyphicon-ok-circle"></span> Monetaria</h5>
    						<p class="sancion-info">La sancion monetaria aplica cuando el plazo de prestamo se vence <br> Cobro: $15</p>
    					</li>
    					<li>
    						<h5><span class="glyphicon glyphicon-ok-circle"></span> Incurrencias</h5>
    						<p class="sancion-info">La sancion con incurrencias aplica cuando  se comnenten X numero de sanciones monetarias.</p>
    					</li>
    					<li>
    						<h5><span class="glyphicon glyphicon-ok-circle"></span> Especial</h5>
    						<p class="sancion-info">La sancion especial aplica en funcion de lo establecido en las <a href="#">configuraciones</a> <br> Cobro: $50</p>
    					</li>
    				</ul>
    			</fieldset>
    		</div>    
  	</div>
@endsection