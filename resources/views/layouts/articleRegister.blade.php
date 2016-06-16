@extends('templates.principal')

@section('content')
<div class="row">
	<h2>Articulos</h2>
	<div class="col-xs-12 col-sm-12 col-md-6">
	    <form action="">
	        <div class="form-group">
	            <label for="">Categoria:</label>
	            <select name="" id="" class="form-control">
	               <option value="0">Categorias</option>
	               <option value="1">Manuales</option>
	               <option value="2">Libros</option>
	            </select>
	        </div>
	        <div class="form-group">
	            <label for="">Codigo del articulo:</label>
	            <div class="input-group">
	                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
	                <input type="text" class="form-control">
	            </div>                              
	        </div>
	        <div class="form-group">
	            <label for="">Nombre del articulo:</label>
	            <div class="input-group">
	                <div class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></div>
	                <input type="text" class="form-control">
	            </div>                              
	        </div>
	        <div class="form-group">
	            <label for="">Descripción del articulo:</label>
	            <textarea name="" id="" cols="30" rows="5" class="form-control" style="resize:none;"></textarea>                           
	        </div>
	        <div class="form-group col-xs-6 col-md-5 col-md-offset-7">
	            <label for="">Cantidad:</label>
	            <input type="number" class="form-control">                          
	        </div>
	        <div class="form-group pull-right mg-top">
	            <input type="submit" class="btn btn-primary" value="Registrar Articulo">
	            <input type="submit" class="btn btn-danger" value="Eliminar Articulo">
	        </div>
	    </form>
	</div>
	<div class="hidden-xs hidden-sm col-sm-4 col-md-offset-2">
	    <p class="info-parrafo">
	        *   El registro de articulos esta basado en las categorias, por lo que se tiene que escoger una categoria para poder registrar el articulo deseado. <br><br>
	        *   El codigo del articulo tiene que ser unico e irrepetible ya que es un identificador del sistema. <br><br>
	        *   El codigo de los articulos registrados se compara con el articulo a registrar, si encuentra algun problema el sistema le notificara.

	    </p>
	</div>
</div>
@endsection