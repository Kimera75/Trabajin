@extends('templates.principal')

@section('content')
<div class="row title-section">
    <h2>Entrega de Préstamos</h2>
</div>
<div class="row mg-top">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <form action="" class="form-horizontal">
            <div class="col-xs-10 col-sm-10s col-md-5">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Codigo de Usuario">
                    <div class="input-group-btn">
                        <input type="submit" class="btn btn-success" value="Buscar">
                    </div>                                            
                </div>                                            
            </div>
        </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <form class="form-inline">
            <div class="form-group pull-right ">
            <label>Nº:</label>
            <input type="text" class="form-control">
            </div>
            <div class="row mg-top">
                <div class="form-group mg-top">
                    <input type="hidden" name="id_user">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mg-bot">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" placholder="Nombre del Alumno">
                    </div>
                    <div class="col-xs-4 col-sm-5 col-md-4 col-lg-3">
                        <label for="">Articulo</label>
                        <input type="text" class="form-control" placeholder="Articulo">
                    </div>
                    <div class="col-xs-4 col-sm-5 col-md-4 col-lg-3">
                        <label for="">Categoria</label>           
                        <input type="text" class="form-control" placeholder="Categoria">
                    </div>
                    <div class="col-xs-4 col-sm-5 col-md-4 col-lg-3">                
                        <div class="input-group mg-top">
                            <input type="text" class="form-control" placeholder="Cantidad">
                            <div class="input-group-addon">Pz.</div>
                        </div>
                    </div>
                </div>
            </div>
             <button class="btn btn-lg btn-success mg-top_2x pull-right">Cobrar</button>               
        </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 mg-top_2x">
        <div class="col-xs-4 col-sm-4 col-md-4 bordeado">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h4 class="text-center">Monetaria</h4>         
                <div class="hidden-xs hidden-sm col-md-12">
                    <p class="info-parrafo">
                        La Multa Monetaria hace referencia a los dias en los cuales el usuario se extendio en el préstamo.
                    </p>
                </div>                            
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <img src="img/false.png" alt="" class="img-responsive centro">  
                </div>                            
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 bordeado">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h4 class="text-center">Incurrencias</h4>
                <div class="hidden-xs hidden-sm col-md-12">
                    <p class="info-parrafo">
                        La multa por incurrencias hace referencias a las veces en las que el usuario hay sido multado y en base a esa informacion bloquea o multa al mismo.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <img src="img/false.png" alt="" class="img-responsive centro">  
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 bordeado">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h4 class="text-center">Especial</h4>
                <div class="hidden-xs hidden-sm col-md-12">
                    <p class="info-parrafo">
                        La multa especial esta definida por el administrador en el apartado de <a href="#">Configuraciones</a>.
                    </p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                    <img src="img/false.png" alt="" class="img-responsive centro">  
                </div>
            </div>
        </div>        
    </div>
</div>
@endsection