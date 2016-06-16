@extends('templates.principal')

@section('content')
<div class="row title-seccion"><h2>Categorias</h2></div>
<div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-inverse">
                    <tr class="table-info">
                        <td class="title-table">#</td>
                        <td class="title-table">Nombre de la Categoria</td>
                        <td class="title-table">Descripcion</td>              
                        <td class="title-table">Operaciones</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Libros</td>
                        <td>Categoria para administrar los libros del departamento</td>                                    
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Material de Practica</td>
                        <td>Material de practicas para el lab. de Telématica</td>                                      
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cañones y Cables</td>
                        <td>Cañones y cables para el Lab de Usuarios</td>    
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Articulos Ventanilla</td>
                        <td>Prestamos a los alumonos de articulos de ventanilla</td>                    
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection