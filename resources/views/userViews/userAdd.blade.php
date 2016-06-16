@extends('templates.principal')

@section('content')
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        {!! Form::open(array())!!}
            @include('templates.forms')
            <div class="form-group pull-right mg-top">                
                {!!Form::submit('Registrar Usuario',array('class'=>'btn btn-primary'))!!}   
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


{{--<form action="">
            <div class="form-group">
                <label>Nombre de Usuario:</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                    <input type="email" class="form-control" placeholder="Ingresa el nombre">  
                </div>
            </div>
            <div class="form-group">
                <label>Codigo de Usuario:</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                    <input type="email" class="form-control" placeholder="Ingresa el codigo">  
                </div>
            </div>
            <div class="form-group">
                <label>Correo Electronico:</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class=" glyphicon glyphicon-envelope"></span></div>
                    <input type="email" class="form-control" placeholder="Ingresa el correo">  
                </div>
            </div>
            <div class="form-group">
                <label>Escoge tu carrera:</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-book"></span></div>
                    <select name="" id="" class="form-control">
                        <option value="0">Carrera</option>
                        <option value="1">Ing en Telématica</option>
                        <option value="2">Medico Cirujano Partero</option>
                        <option value="3">Medico Veterinario</option>      
                    </select>  
                </div>
            </div>
            <div class="form-group">
                <label>Rol:</label>
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <select name="" id="" class="form-control">
                        <option value="0">Escoge el Rol</option>
                        <option value="1">Alumno</option>
                        <option value="2">Maestro(a)</option>
                    </select>  
                </div>
            </div>
            <div class="form-group pull-right mg-top">
                <input type="submit" class="btn btn-primary" value="Registrar Usuario">
                <input type="submit" class="btn btn-danger" value="Borra Usuario">
            </div>
    </form> --}}