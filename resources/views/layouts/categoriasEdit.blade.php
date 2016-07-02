@extends('templates.principal')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        {!! Form::model($cat,array('route'=>['category.update',$cat->id],'method'=>'PUT')) !!}
            @include('templates.form-category')                     
            <div class="form-group pull-right mg-top">
                {!!Form::submit('Guardar Cambios', array('class' => 'btn btn-success'))!!}      
                {!!Form::submit('Eliminar Categoria', array('class' => 'btn btn-danger'))!!}      
            </div>
        {!!Form::close()!!}
    </div>
    <div class="hidden-xs hidden-sm col-sm-4 col-md-offset-2">
        <p class="info-parrafo">
            *   El sistema permite el registro ilimitado de categorias, para ayudar a la administracion de los articulos. <br><br>
            *   El codigo de la categoria tiene que ser unico e irrepetible ya que es un identificador del sistema y sirve como referencia en el registro de articulos. <br><br>
            *   El codigo de los articulos registrados se compara con el articulo a registrar, si encuentra algun problema el sistema le notificara.
        </p>
    </div>
</div>
@endsection