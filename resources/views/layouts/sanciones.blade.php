@extends('templates.principal')

@section('content')
	<div class="row title-section"><h2>Sanciones</h2></div>
	<div class="row">
	    <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#modal-charge">Cobrar</button>

	    <div class="modal fade" tabindex="-1"  id="modal-charge">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	            <h4 class="modal-title">Cobrar</h4>
	          </div>
	          <div class="modal-body">
	            <div class="row">                
	                <form action="">  
	                <div class="col-xs-12 col-sm-12 col-md-12 mg-top">               
	                    <div class="col-xs-12 col-sm-8 col-md-6">
	                        <label for="">Codigo del usuario:</label>
	                        <div class="input-group">
	                          <input type="text" class="form-control" placeholder="Codigo...">
	                          <span class="input-group-btn">
	                            <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span></button>
	                          </span>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-12 col-md-12 mg-top">  
	                    <div class="col-xs-12 col-sm-8 col-md-6">
	                        <label for="">Nombre del usuario:</label>
	                        <div class="input-group">
	                          <input type="text" class="form-control" placeholder="Nombre..." disabled>                                          
	                        </div>
	                    </div>  
	                </div>
	                <div class="col-xs-12 col-sm-12 col-md-12 mg-top">  
	                    <div class="col-xs-12 col-sm-8 col-md-6">
	                        <label for="">Nombre del Articulo:</label>
	                        <div class="input-group">
	                          <input type="text" class="form-control" placeholder="Nombre del articulo..." disabled>                         
	                        </div>
	                    </div>  
	                </div>
	                <div class="col-xs-12 col-sm-12 col-md-12 mg-top">  
	                    <div class="col-xs-12 col-sm-8 col-md-6">
	                        <label for="">Multa</label>
	                        <div class="input-group">
	                          <input type="text" class="form-control" placeholder="Total a pagar..." disabled>                         
	                        </div>
	                    </div>  
	                </div>                      
	                </form>
	            </div>
	          </div>
	          <div class="modal-footer">
	            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	            <button type="button" class="btn btn-success">Cobrar</button>
	          </div>
	        </div>
	      </div>
	    </div>

	    <div class="row mg-top_2x">
	        <fieldset>
	            <legend class="center-only-sm">Configuraciones</legend>
	            <div class="col-xs-12 col-sm-12 col-md-12 bordeado_2">
	                <div class="hidden-xs hidden-sm col-md-8">
	                    <div class="row">
	                        <div class="panel panel-primary">
	                            <div class="panel-heading">
	                            <h3 class="panel-title text-center">Monetaria</h3>
	                            </div>
	                            <div class="panel-body">
	                                <p class="info-sancion text-justify">
	                                    La multa monetaria funciona a base de los prestamos que se alargan de la fecha establecida de entrega. El usuario que se alargue en la entrega tendra una multa monetaria en funcion de los dias que no entrego, en caso de ser fines de semana la multa monetaria podria aumentar su valor.
	                                    <br>
	                                    <ul>
	                                        <li>Multa Normal -> Se refiere a la multa que se aplica cada dia extra en caso de que se pasen los dias de préstamo establecidos en los <strong>Dias de préstamos</strong></li>
	                                        <li class="mg-top">Multa en Fin de Semana -> Se da por hecho que llevarse el material prestado y no entregarlo el viernes cuenta como multa de fin de semana aun asi lo entregue el sabado.</li>
	                                    </ul>
	                                </p>
	                            </div>
	                        </div>                                       
	                        
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-12 col-md-4 mg-bot">
	                    <h3 class="text-center col-xs-12 col-sm-12 hidden-md hidden-lg">
	                        Monetaria
	                    </h3>
	                    <form action="">
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Dias de préstamo:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="Dias...">                                 
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Multa Normal:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="$$$">
	                                  <div class="input-group-addon">
	                                      <span class="glyphicon glyphicon-usd"></span>
	                                  </div>         
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Multa en Fin de Semana:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="$$$">
	                                  <div class="input-group-addon">
	                                      <span class="glyphicon glyphicon-usd"></span>
	                                  </div>         
	                                </div>
	                            </div>
	                        </div><div class="col-xs-12 col-sm-12 col-md-12 mg-top">
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                               <input type="submit" class="btn btn-primary btn-md pull-right" value="Guardar Cambios">
	                            </div>
	                        </div>
	                    </form>                                    
	                </div>
	            </div>  

	            <div class="col-xs-12 col-sm-12 col-md-12 bordeado_2 mg-top">
	                <div class="hidden-xs hidden-sm col-md-8">
	                    <div class="row">
	                        <div class="panel panel-info">
	                            <div class="panel-heading">
	                            <h3 class="panel-title text-center">Monetaria</h3>
	                            </div>
	                            <div class="panel-body">
	                                <p class="info-sancion text-justify">
	                                    La multa monetaria funciona a base de los prestamos que se alargan de la fecha establecida de entrega. El usuario que se alargue en la entrega tendra una multa monetaria en funcion de los dias que no entrego, en caso de ser fines de semana la multa monetaria podria aumentar su valor.
	                                    <br>
	                                    <ul>
	                                        <li>Multa Normal -> Se refiere a la multa que se aplica cada dia extra en caso de que se pasen los dias de préstamo establecidos en los <strong>Dias de préstamos</strong></li>
	                                        <li class="mg-top">Multa en Fin de Semana -> Se da por hecho que llevarse el material prestado y no entregarlo el viernes cuenta como multa de fin de semana aun asi lo entregue el sabado.</li>
	                                    </ul>
	                                </p>
	                            </div>
	                        </div>                                       
	                        
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-12 col-md-4 mg-bot">
	                    <h3 class="text-center col-xs-12 col-sm-12 hidden-md hidden-lg">
	                        Monetaria
	                    </h3>
	                    <form action="">
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Dias de préstamo:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="Dias...">                                 
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Multa Normal:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="$$$">
	                                  <div class="input-group-addon">
	                                      <span class="glyphicon glyphicon-usd"></span>
	                                  </div>         
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Multa en Fin de Semana:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="$$$">
	                                  <div class="input-group-addon">
	                                      <span class="glyphicon glyphicon-usd"></span>
	                                  </div>         
	                                </div>
	                            </div>
	                        </div><div class="col-xs-12 col-sm-12 col-md-12 mg-top">
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                               <input type="submit" class="btn btn-info btn-md pull-right" value="Guardar Cambios">
	                            </div>
	                        </div>
	                    </form>                                    
	                </div>
	            </div> 

	            <div class="col-xs-12 col-sm-12 col-md-12 bordeado_2 mg-top">
	                <div class="hidden-xs hidden-sm col-md-8">
	                    <div class="row">
	                        <div class="panel panel-success">
	                            <div class="panel-heading">
	                            <h3 class="panel-title text-center">Monetaria</h3>
	                            </div>
	                            <div class="panel-body">
	                                <p class="info-sancion text-justify">
	                                    La multa monetaria funciona a base de los prestamos que se alargan de la fecha establecida de entrega. El usuario que se alargue en la entrega tendra una multa monetaria en funcion de los dias que no entrego, en caso de ser fines de semana la multa monetaria podria aumentar su valor.
	                                    <br>
	                                    <ul>
	                                        <li>Multa Normal -> Se refiere a la multa que se aplica cada dia extra en caso de que se pasen los dias de préstamo establecidos en los <strong>Dias de préstamos</strong></li>
	                                        <li class="mg-top">Multa en Fin de Semana -> Se da por hecho que llevarse el material prestado y no entregarlo el viernes cuenta como multa de fin de semana aun asi lo entregue el sabado.</li>
	                                    </ul>
	                                </p>
	                            </div>
	                        </div>                                       
	                        
	                    </div>
	                </div>
	                <div class="col-xs-12 col-sm-12 col-md-4 mg-bot">
	                    <h3 class="text-center col-xs-12 col-sm-12 hidden-md hidden-lg">
	                        Monetaria
	                    </h3>
	                    <form action="">
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Dias de préstamo:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="Dias...">                                 
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Multa Normal:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="$$$">
	                                  <div class="input-group-addon">
	                                      <span class="glyphicon glyphicon-usd"></span>
	                                  </div>         
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-xs-12 col-sm-12 col-md-12 mg-top">        
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                                <label for="">Multa en Fin de Semana:</label>
	                                <div class="input-group">
	                                  <input type="number" class="form-control" placeholder="$$$">
	                                  <div class="input-group-addon">
	                                      <span class="glyphicon glyphicon-usd"></span>
	                                  </div>         
	                                </div>
	                            </div>
	                        </div><div class="col-xs-12 col-sm-12 col-md-12 mg-top">
	                            <div class="col-xs-12 col-sm-12 col-md-12">
	                               <input type="submit" class="btn btn-success btn-md pull-right" value="Guardar Cambios">
	                            </div>
	                        </div>
	                    </form>                                    
	                </div>
	            </div>                          
	        </fieldset>
	    </div>
	</div>
@endsection
