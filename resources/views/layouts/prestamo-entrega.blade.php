@extends('templates.principal')

@section('content')
<div class="row title-section">
    <h2>Entrega de Préstamos</h2>
</div>
<div class="row mg-top">
    <div class="col-xs-12 col-sm-12 col-md-12">
        {!!Form::open(array('class' => 'form-horizontal'))!!}
            <div class="col-xs-10 col-sm-10s col-md-5">
                <div class="input-group">
                    {!!Form::text('id',null,array('class' => 'form-control', 'placeholder' => 'Codigo de Usuario'))!!}                    
                    <div class="input-group-btn">
                        {!!Form::submit('Buscar',array('class' => 'btn btn-success'))!!}           
                    </div>                                            
                </div>                                            
            </div>
        {!!Form::close()!!}
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">        
        {!!Form::open(array('class' => 'form-inline'))!!}            
            <div class="row mg-top">
                <div class="form-group">
                    {!!Form::hidden('id_user',null,array())!!}             
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mg-bot mg-top">
                        {!!Form::label('name','Nombre')!!}
                        {!!Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Nombre del alumno'))!!}                       
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-12 recivied">
                        <div class="form-group pull-right ">
                            {!!Form::label('num','Nº')!!}  
                            {!!Form::text('id-loan',null,array('class' => 'form-control'))!!}
                        </div>
                        <div class="table-responsive col-xs-12 col-sm-12 col-md-12">                         
                            <table class="table" id="loan-table">
                                <thead>
                                    <th class="text-center">Entrega</th>
                                    <th class="text-center">Articulo</th>
                                    <th class="text-center">Categoria</th>
                                    <th class="text-center">Cantidad</th>
                                </thead>
                                <tbody>
                                    <td class="text-center">
                                       {!!Form::radio('status',null,false,array('class' => 'form-control mg-right'))!!}
                                    </td>
                                    <td class="text-center">
                                         {!!Form::text('arti',null,array('class' => 'form-control mg-right', 'placeholder' => 'Articulo'))!!}
                                    </td>
                                    <td class="text-center">
                                        {!!Form::text('cat',null,array('class' => 'form-control mg-right', 'placeholder' => 'Categoria'))!!}
                                    </td>
                                    <td class="text-center">
                                        {!!Form::text('quantity',null,array('class' => 'form-control mg-right', 'placeholder' => 'Cantidad'))!!}
                                    </td>
                                </tbody>
                            </table>  
                        </div> 
                    </div>                             
                </div>
            </div>
             <button class="btn btn-lg btn-success mg-top_2x pull-right">Cobrar / Entregar</button>    
        {!!Form::close()!!}    
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



{{-- 
     <div class="col-xs-4 col-sm-5 col-md-4 col-lg-3">                        
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

 --}}