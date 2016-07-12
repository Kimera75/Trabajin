@extends('templates.principal')

@section('content')
<div class="row title-section"><h2>Hacer Préstamo</h2></div>
<div class="row mg-top text-center">
    <div class="col xs 12 col-sm 6 col-md-6 mg-top">
        <button class="btn btn-success btn-lg makeLoan" data-toggle="modal" data-target="#modal-interno">Préstamo Interno</button>
        <div class="hidden-xs col-sm-12 col-md-12 mg-top">
            <p class="info-parrafo">* Dentro del préstamo interno conciernen todos los alumnos y administrativos que piden el material para el uso del mismo, dentro del laboratorio. Se usan las politicas asignadas por el adminsitrador. Para mas informacion valla a<br><a href="">Configuraciones</a> <strong>></strong> <a href="">Sanciones</a></p></p>
        </div>
    </div>
    <div class="col xs 12 col-sm 6 col-md-6 mg-top">
        <button class="btn btn-info btn-lg makeLoan" data-toggle="modal" data-target="#modal-externo">Préstamo Externo</button>
        <div class="hidden-xs col-sm-12 col-md-12 mg-top">
            <p class="info-parrafo">* Dentro del préstamo externo incluyen los alumnos y administrativos que piden el material para un uso externo del laboratorio ya sea dentro de un rango de dias o con las politicas que se manejen en la seccion de <br><a href="">Configuraciones</a> <strong>></strong> <a href="">Sanciones</a></p>
        </div>
    </div>
</div> <!-- /.row -->
<!-- Modal interno -->
<div class="modal fade" id="modal-interno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-home fa-fw"></i>Prestamo interno</h4>
      </div>
      {!!Form::open(array('class' => 'text-center'))!!}
          <div class="modal-body">                                                
           {!!Form::label('code','Codigo del usuario', array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                </div>
                {!!Form::text('id_user',null,array('class' => 'form-control', 'palceholder' => 'Codigo', 'id' => 'id_user'))!!}
            </div>
            {!!Form::label('cat','Categorias:', array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-indent-left"></span>
                </div>
                {!!Form::select('category',$categorys,null,array('class' => 'form-control', 'id' => 'cat-selec'))!!}
            </div>
            {!!Form::label('article','Articulos:', array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-book"></span>
                </div>
                <select name="" id="arti-select" class="form-control">
                    <option value="0">Articulos</option>
                    <option value="1">Articulo 1</option>
                </select>
            </div>
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3 mg-top">
                <button type="button" class="btn btn-primary" id="btn-prestar">Agregar a lista</button>
            </div>
            {!!Form::label('Num-arti', 'Numero de articulos:', array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3" id="loan-arti">                      
            </div>
            {!!Form::label('date','Fecha:',array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3 date">
                {!!Form::text('date',null,array('class' => 'form-control datepick'))!!}               
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>                        
          </div>
           <div class="modal-footer">
            <input type="submit" class="btn btn-success" data-dismiss="modal" value="Realizar Préstamo">
            <button class="btn btn-warning" data-dismiss="modal">Cancelar</button>
          </div>
      {!!Form::close()!!}                     
    </div>
  </div>
</div> <!-- /.modal-interno -->
    
<!-- Modal Externo -->
<div class="modal fade" id="modal-externo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-globe fa-fw"></i>Préstamo externo</h4>
      </div>
      {!!Form::open(array('class' => 'text-center'))!!}
        <div class="modal-body">                                                
            {!!Form::label('code','Codigo del usuario', array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                </div>
                {!!Form::text('id_user',null,array('class' => 'form-control', 'palceholder' => 'Codigo', 'id' => 'id_user_exte'))!!}
            </div>
            {!!Form::label('cat','Categorias:', array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-indent-left"></span>
                </div>
                {!!Form::select('category',$categorys,null,array('class' => 'form-control', 'id' => 'cat-selec_exte'))!!}
            </div>
           {!!Form::label('article','Articulos:', array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3">
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-book"></span>
                </div>
                <select name="" id="arti-select-exte" class="form-control">
                    <option value="0">Articulos</option>
                    <option value="1">Articulo 1</option>
                </select>
            </div>
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3 mg-top">
                <button type="button" class="btn btn-primary" id="btn-prestar-exte">Agregar a lista</button>
            </div>
            {!!Form::label('Num-arti', 'Numero de articulos:', array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3" id="loan-arti-exte">                      
            </div>        
            {!!Form::label('date','Fecha préstamo:',array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3 date">
                {!!Form::text('date',null,array('class' => 'form-control datepick'))!!}               
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
           {!!Form::label('date','Fecha entrega:',array('class' => 'mg-top'))!!}
            <div class="input-group col-xs-12 col-sm-7 col-sm-offset-3 col-md-6 col-md-offset-3 date">
                {!!Form::text('date',null,array('class' => 'form-control datepick'))!!}               
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>                        
          </div>
           <div class="modal-footer">
            <input type="submit" class="btn btn-success" data-dismiss="modal" value="Realizar Préstamo">
            <button class="btn btn-warning" data-dismiss="modal">Cancelar</button>
          </div>
      </form>                     
    </div>
  </div>
</div> <!-- /.modal-externo -->
@endsection