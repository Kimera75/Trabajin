@extends('templates.principal')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>
@endif
    <div class="row title-seccion"><h2>Usuarios</h2></div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dt-tableUsers">
             {{--    <thead class="thead-inverse">
                    <tr class="table-info">
                        <td class="title-table">#</td>
                        <td class="title-table">Nombre</td>
                        <td class="title-table">Carrera</td>
                        <td class="title-table">Rol</td>
                        <td class="title-table">Operaciones</td>
                    </tr>
                </thead> --}}
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="text-center">{{$user->id}}</td>
                        <td class="text-center">{{$user->name}}</td>
                        <td class="text-center">{{$user->e_mail}}</td>
                        <td class="text-center">{{$user->role}}</td>
                        <td class="text-center">
                            {!!link_to_route('user.edit', $title = 'Editar', $parameters = $user->id, $attributes = array('class' => 'btn btn-warning'))!!}
                        </td>
                    </tr>                
                    @endforeach                   
                </tbody>
            </table>
        </div>
    </div>
    </div>
  {{--   {!! $users->render() !!} --}}

@endsection
