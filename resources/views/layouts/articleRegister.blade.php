@extends('templates.principal')

@section('content')
<div class="row">
	<div class="nodisplay" id="check">
        <h2 class="text-center relative">Error! No hay registro de categorias disponible</h2>
    </div>		
	<h2>Articulos</h2>
	<div class="col-xs-12 col-sm-12 col-md-6">
     	{!!Form::open(array('route'=>'article.store','method'=>'POST'))!!}
	    	@include('templates.form-article')
	    	<div class="form-group pull-right mg-top">
	    		{!!Form::submit('Registrar Articulo', array('class' => 'btn btn-primary'))!!}
	    	</div>	    
     	{!! Form::close() !!}
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