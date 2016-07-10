@extends('templates.principal')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
<div class="row title-seccion"><h2>Articulo</h2></div>
<div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dt_article">          
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td class="text-center">{{$article->id}}</td>
                        <td class="text-center">{{$article->category->name}}</td>
                        <td class="text-center">{{$article->name}}</td>
                        <td class="text-center">{{$article->description}}</td>
                        <td class="text-center">{{$article->quantity}}</td>
                        <td class="text-center">
                            {!!link_to_route('article.edit', $title = 'Editar', $parameters = $article->id, $attributes = array('class' => 'btn btn-warning'))!!}
                        </td>
                    </tr> 
                    @endforeach                   
                </tbody>
            </table>
        </div>
</div>
@endsection