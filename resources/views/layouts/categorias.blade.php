@extends('templates.principal')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
<div class="row title-seccion"><h2>Categorias</h2></div>
<div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dt-table" id="dt_cat">
                <tbody>
                    @foreach($cats as $cat)
                    <tr>
                        <td class="text-center">{{$cat->id}}</td>
                        <td class="text-center">{{$cat->name}}</td>                        
                        <td class="text-center">
                            {!!link_to_route('category.edit', $title = 'Editar', $parameters = $cat->id, $attributes = array('class' => 'btn btn-warning'))!!}
                        </td>
                    </tr>
                    @endforeach     
                </tbody>
            </table>
        </div>
</div>
@endsection