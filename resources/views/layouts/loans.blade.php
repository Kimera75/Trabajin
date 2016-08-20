@extends('templates.principal')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
<div class="row title-section"><h2>Préstamos articulo</h2></div>    
        <ul>         
            <li>{{$singleArticle}}</li>
        </ul>       
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dt-table" id="dt-tableLoan">
                <tbody>
                @if (isset($loans))                            
                    @foreach($loans as $loan)
                    <tr>
                        <td class="text-center">{{$loan->articles}}</td>
                        <td class="text-center">{{$loan->quantity}}</td>
                        <td class="text-center">{{$loan->state}}</td>                       
                        <td class="text-center">
                            {!!link_to_route('loans.edit', $title = 'Editar', $parameters = $loan->id, $attributes = array('class' => 'btn btn-warning'))!!}
                        </td>
                    </tr>                
                    @endforeach  
                @endif                             
                </tbody>
            </table>
        </div>
    </div>
@endsection