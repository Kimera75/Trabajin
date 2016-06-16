@extends('templates.principal')

@section('content')
<div class="row title-seccion"><h2>Articulo</h2></div>
<div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-inverse">
                    <tr class="table-info">
                        <td class="title-table">#</td>
                        <td class="title-table">Categoria</td>
                        <td class="title-table">Nombre</td>
                        <td class="title-table">Descripcion</td>
                        <td class="title-table">Cantidad</td>
                        <td class="title-table">Operaciones</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Libros</td>
                        <td>Desarrollo Web</td>
                        <td>Autor: Robert D Niro</td>
                        <td>10</td>
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Libros</td>
                        <td>Java for dummies</td>
                        <td>Autor: Luis Vuiton</td>
                        <td>3</td>
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Switch y Routers</td>
                        <td>Router Cisco 9002</td>
                        <td>-</td>
                        <td>15</td>
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Articulos Ventanilla</td>
                        <td>Tablas Protoboard</td>
                        <td>Protoboards para Electronica</td>
                        <td>7</td>
                        <td class="text-center"><button class="btn btn-warning">Editar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection