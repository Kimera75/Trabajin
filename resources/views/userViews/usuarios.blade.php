@extends('templates.principal')

@section('content')
    <div class="row title-seccion"><h2>Usuarios</h2></div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-inverse">
                    <tr class="table-info">
                        <td class="title-table">#</td>
                        <td class="title-table">Nombre</td>
                        <td class="title-table">Carrera</td>
                        <td class="title-table">Rol</td>
                        <td class="title-table">Operaciones</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cristofer Flores</td>
                        <td>Ing. en Telématica</td>
                        <td>Alumno</td>
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John Antony</td>
                        <td>Ing. en Telématica</td>
                        <td>Alumno</td>
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Eduviges</td>
                        <td>Ing. en Telématica</td>
                        <td>Maestro(a)</td>
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Ponce Jesus</td>
                        <td>Ing. en Telématica</td>
                        <td>Maestro(a)</td>
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection