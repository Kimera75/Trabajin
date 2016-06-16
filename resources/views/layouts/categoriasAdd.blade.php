@extends('templates.principal')

@section('content')
<div class="row">
    <h2>Categorias</h2>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <form action="">                            
            <div class="form-group">
                <label for="">Nombre de la Categoria:</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-list-alt"></span></div>
                    <input type="text" class="form-control">
                </div>                              
            </div>
            <div class="form-group">
                <label for="">Codigo de la Categoria:</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></div>
                    <input type="text" class="form-control">
                </div>                              
            </div>
            <div class="form-group">
                <label for="">Descripción de la Categoria:</label>
                <textarea name="" id="" cols="30" rows="5" class="form-control" style="resize:none;"></textarea>                           
            </div>                           
            <div class="form-group pull-right mg-top">
                <input type="submit" class="btn btn-primary" value="Registrar Articulo">
                <input type="submit" class="btn btn-danger" value="Eliminar Articulo">
            </div>
        </form>
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