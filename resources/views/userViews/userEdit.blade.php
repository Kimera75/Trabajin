@extends('templates.principal')

@section('content')
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        {!! Form::model($user,array('route'=>['user.update',$user->id],'method'=>'PUT')) !!}
            @include('templates.forms')
            <div class="form-group pull-right mg-top">                
                {!!Form::submit('Actualizar Usuario',array('class'=>'btn btn-success'))!!}                   
            </div>
        {!! Form::close() !!}

        {!!Form::open(array('route' => ['user.destroy', $user->id], 'method' => 'DELETE'))!!}
        <div class="form-group pull-right mg-top" style="margin-right: 15px;">
            {!!Form::submit('Borrar Usuario',array('class'=>'btn btn-danger'))!!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="hidden-xs hidden-sm col-md-4 col-md-offset-2">
        <p class="info-parrafo">
            *   El registro de usuarios solo
             permite el registro solo de alumnos y docentes de la <a href="">Univeridad de Guadalajara</a>. <br> <br>
             *  En caso de tener registros duplicados el sistema notificara el error. <br> <br>
             *  Para eliminar un registro se tiene que tener en cuenta que la reposicion no es opcionable por lo que se recomienda ser cuidadoso al momento de eliminar.

        </p>
    </div>                    
    </div>
@endsection