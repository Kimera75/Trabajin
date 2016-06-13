@extends('layouts.principal')

@section('content')
<div class="col-md-9 mg-top borde-left">
        <div class="col-md-9 mg-top borde-left">
	        <div class="col-md-12 mg-top">
	          <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add-modal">Agregar Categoria</button>
	          <div class="modal fade" id="add-modal">
	            <div class="modal-dialog">
	              <div class="modal-content">
	                <div class="modal-header">
	                  <button class="close" data-dismiss="modal">&times;</button>
	                  <h3 class="modal-title">Agregar Categoria</h3>
	                </div>
	                <form action="">
	                  <div class="modal-body">
	                    <div class="form-group">
	                      <label for="Codigo">Codigo de la Categoria <span class="glyphicon glyphicon-info-sign" data-toggle="popover" data-content="El codigo debe ser unico e irrepetible"></span></label>
	                      <input type="text" class="form-control">
	                    </div>
	                    <div class="form-group">
	                      <label for="Nombre">Nombre de la Categoria</label>
	                      <input type="text" class="form-control">
	                    </div>                                
	                  </div>
	                  <div class="modal-footer">
	                    <input type="submit" class="btn btn-success" value="Guardar">
	                    <button class="btn btn-warning" data-dismiss="modal">Cancelar</button>
	                  </div>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>
      	</div>
@endsection