@extends('templates.principal')

@section('content')
<div class="row title-section"><h2>Reportes</h2></div>
<div class="row mg-top">
	<div class="col-xs-12 col-sm-6 col-md-5 mg-right reporte borde full-pa text-center">
		<div class="col-xs-12 col-sm-12 col-md-12 bordeado_2 title-reporte">
			<h4>USUARIOS</h4>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 mg-top ">
			<i class="fa fa-file-pdf-o fa-5x"></i>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 mg-top">
			{!!link_to('/pdf/Users', $title = "Imprimir Reporte", $attributes = array('class' => 'btn btn-lg btn-warning', 'target' => '_blank'), $secure = null)!!}					
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-5 reporte borde full-pa text-center">
		<div class="col-xs-12 col-sm-12 col-md-12 bordeado_2 title-reporte">
			<h4>ARTICULOS</h4>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 mg-top ">
			<i class="fa fa-file-pdf-o fa-5x"></i>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 mg-top">
			{!!link_to('/pdf/Articles', $title = "Imprimir Reporte", $attributes = array('class' => 'btn btn-lg btn-warning', 'target' => '_blank'), $secure = null)!!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-5 mg-top_2x mg-right reporte borde full-pa text-center">
		<div class="col-xs-12 col-sm-12 col-md-12 bordeado_2 title-reporte">
			<h4>PRÉSTAMOS</h4>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 mg-top ">
			<i class="fa fa-file-pdf-o fa-5x"></i>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 mg-top">
			{!!link_to('/pdf/Loans', $title = "Imprimir Reporte", $attributes = array('class' => 'btn btn-lg btn-warning', 'target' => '_blank'), $secure = null)!!}
		</div>
	</div>	
</div>
@endsection