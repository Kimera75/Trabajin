@extends('layouts.principal')

@section('content')
	<div class="col-md-9 borde-left">
	      <div class="col-md-12 col-md-offset-1 all-border2 mg-top3">
            <div class="col-md-8 config-title-info">
              <h2>Multa Monetaria</h2>
              <p class="config info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quidem, iure placeat consequatur? Autem ut commodi facilis id dolorum, sit voluptate repudiandae non odit veritatis!</p>
            </div>
            <div class="col-md-4 ">
              <form action="" class="form-horizontal">
                <div class="form-group">
                  <label for="" class="col-md-12">Dias de arrendacion</label>
                  <div class="col-md-12">
                    <input type="number" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-md-12">Multa entre semana</label>
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-md-12">Multa en fin de semana</label>
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-sm" value="Guardar estos cambios">
              </form>
            </div>
          </div>

          <div class="col-md-12 col-md-offset-1 all-border2 mg-top3">
            <div class="col-md-8 config-title-info">
              <h2>Multa Monetaria</h2>
              <p class="config info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quidem, iure placeat consequatur? Autem ut commodi facilis id dolorum, sit voluptate repudiandae non odit veritatis!</p>
            </div>
            <div class="col-md-4 ">
              <form action="" class="form-horizontal">
                <div class="form-group">
                  <label for="" class="col-md-12">Numero de Incurrencias:</label>
                  <div class="col-md-12">                                    
                    <input type="number" class="form-control">                  
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-md-12">Multa en dias</label>
                  <div class="col-md-12">
                    <div class="input-group">                     
                      <input type="number" class="form-control">
                    </div>
                  </div>
                </div>
                <input type="submit" class="btn btn-primary btn-sm" value="Guardar estos cambios">
              </form>
            </div>
          </div>

          <div class="col-md-12 col-md-offset-1 all-border2 mg-top3">
            <div class="col-md-8 config-title-info">
              <h2>Multa Monetaria</h2>
              <p class="config info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quidem, iure placeat consequatur? Autem ut commodi facilis id dolorum, sit voluptate repudiandae non odit veritatis!</p>
            </div>
            <div class="col-md-4 ">
              <form action="" class="form-horizontal">
                <div class="form-group">
                  <label for="" class="col-md-12">Razones:</label>
                  <div class="col-md-12">
                    <textarea name="" id="" cols="30" rows="1"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-md-12">Multa:</label>
                  <div class="col-md-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>    
                <input type="submit" class="btn btn-primary btn-sm" value="Guardar estos cambios">            
              </form>
            </div>
          </div>
  	</div>
@endsection
