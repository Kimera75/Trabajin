@extends('templates.principal')

@section('content')
	<div class="row">
	    <div class="col-xs-12 col-sm-4 col-md-4">
	        <figure>
	            <img src="img/index.jpg" alt="index" class="img-responsive">
	        </figure>
	    </div>
	    <div class="col-xs-12 col-sm-8 col-md-8">
	       <h1>{{isset($app) ? $app->title: "Nombre de la aplicacion"}}</h1>
	    </div>
	    <div class="col-xs-12 col-sm-12 col-md-12">
	        <fieldset class="field">
	            <legend>Información</legend>
	            <div class="hidden-xs col-sm-3 col-md-3">
	                <ul class="info-dep">
	                    <li class="app-li bold">
	                        Nombre del laboratorio:
	                    </li>
	                    <li class="app-li bold">
	                        Departamento:
	                    </li>
	                    <li class="app-li bold">
	                        Coordinador(a):
	                    </li>
	                    <li class="app-li bold">
	                        Contacto:
	                    </li>
	                </ul>
	            </div>
	            <div class="col-xs-12 col-sm-9 col-md-9">
	                <ul class="info-dep">
	                    <li class="app-li">
	                        <p class="hidden-sm hidden-md hidden-lg bold">Nombre del laboratorio: <br></p>
	                        {{isset($app) ? $app->name_lab : "Nombre del Laboratorio" }}
	                    </li>
	                    <li class="app-li">
	                        <p class="hidden-sm hidden-md hidden-lg bold"> Departamento:
	                        <br></p>
	                        {{isset($app) ? $app->dep : "Departamento al que pertenece"}}
	                    </li>
	                    <li class="app-li">
	                        <p class="hidden-sm hidden-md hidden-lg bold">  Coordinador(a):
	                        <br></p>
	                       {{isset($app) ? $app->coord : "Coordinador(a)"}}
	                    </li>
	                    <li class="app-li">
	                        <p class="hidden-sm hidden-md hidden-lg bold">
	                        Contacto:                                            
	                        <br></p>
	                        {{isset($app) ? $app->contac : "Contacto del coordinador o laboratorio"}}
	                    </li>
	                </ul>
	            </div>                                                    
	        </fieldset>
	        <div class="footer-field col-xs-12 col-sm-12 col-md-12">
	            <h3>Universidad de Guadalajara</h3>
	        </div>  
	    </div>                   
	</div>
@endsection