@extends('templates.principal')

@section('content')
@if(Session::has('loan'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('loan')}}
</div>
@endif
<div class="row title-section"><h2>Préstamos articulo</h2></div>
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-12 col-lg-12">
            <div class="col-md-12">
                <ul class="styless">
                    <li>
                        <i class="fa fa-circle green" aria-hidden="true"></i>
                        &nbsp;
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>      
                        &nbsp;En curso
                    </li>
                    <li>
                        <i class="fa fa-circle yellow" aria-hidden="true"></i>
                        &nbsp;
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        &nbsp;Incompleto
                    </li>
                    <li>
                        <i class="fa fa-circle blue" aria-hidden="true"></i>
                        &nbsp;
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        &nbsp;Completo
                    </li>
                    <li>
                        <i class="fa fa-circle red" aria-hidden="true"></i>
                        &nbsp;
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        &nbsp;Entregado Tarde
                    </li>
                </ul>
            </div>
        </div>   
    </div>  

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dt-table" id="dt-tableLoan">
                <tbody>                                        
                    @foreach($loans as $loan)
                    <tr>
                        <td class="text-center">{{$loan->user->name}}</td>          
                        <td class="text-center">{{$loan->start_date_loan}}</td>
                        @if ($loan->state == "EnCurso")
                        <td class="text-center">
                            <i class="fa fa-circle green" aria-hidden="true"></i>
                        </td>                        
                        @endif                
                        <td class="text-center">
                            {!!link_to_action('LoansController@viewLoan', $title = 'Ver mas informacion', $parameters = $loan->id, $attributes = array('class' => 'btn btn-success'));!!}              
                        </td>
                    </tr>                
                    @endforeach                                        
                </tbody>
            </table>
        </div>
    </div>
@endsection