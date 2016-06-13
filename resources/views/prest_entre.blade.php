@extends('layouts.principal')

@section('content')
	<div class="col-md-9 mg-top borde-left">
      	<div class="col-md-6 col-md-offset-1">
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
      				<label for="material">Material:</label>
      				<input type="text" class="form-control" disabled>
      			</div>
      			<div class="form-group">
      				<label for="establecida">Fecha Establecida de entrega:</label>
      				<input type="text" class="form-control" disabled>
      			</div>
      			<div class="form-group">
      				<label for="entrega">Fecha de entrega:</label>
      				<input type="text" class="form-control" disabled>
      			</div>
      			<div class="checkbox mg-top2">
      				<label>
      					<input type="checkbox"> Multa Especial
      				</label>
      			</div>
      			<input type="submit" class="btn btn-success btn-lg mg-top pull-right" value="Realizar entrega">
      		</form>
      	</div>
      	<div class="col-md-4 col-md-offset-1 all-border">
      		<fieldset>
      			<legend>Multas</legend>
      			<div class="form-group">
	      			<label for="">Monetaria:</label>
	      			<div class="input-group">
	      				<span class="input-group-addon">
	      					<span class="glyphicon glyphicon-usd"></span>
	      				</span>
	      				<input type="text" class="form-control">
	      			</div>
      			</div>
      			<div class="form-group">
	      			<label for="">Incurrencias:</label>
	      			<input type="text" class="form-control" placeholder="Dias de multa"> 
      			</div>
      			<div class="form-group">
	      			<label for="">Especial:</label>
	      			<div class="input-group">
	      				<span class="input-group-addon">
	      					<span class="glyphicon glyphicon-usd"></span>
	      				</span>
	      				<input type="text" class="form-control">
	      			</div>
      			</div>
      		</fieldset>
      	</div>  
  	</div>
@endsection