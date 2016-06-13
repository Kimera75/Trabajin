@extends('layouts.principal')

@section('content')
	<div class="col-md-9 mg-top borde-left">
        <div class="col-md-7 col-md-offset-1">
          <form action="">
            <div class="form-group">
              <label for="Categoria">Categoria:</label>
              <select name="" id="" class="form-control">
                <option value="0">Categoria 1</option>
                <option value="1">Categoria 2</option>
                <option value="2">Categoria 3</option>
              </select>
            </div>
            <div class="form-group">
              <label for="Codigo">Codigo del articulo:</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="nombre">Nombre del articulo:</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="nombre">Descripcion del articulo:</label>
              <textarea name="" id="" cols="30" rows="10" class="form-control">
                
              </textarea>
            </div>
            <input type="submit" class="btn btn-success btn-md pull-right" value="Registrar">
          </form>
        </div>
        <div class="col-md-4">
          <div class="pull-right mg-top2">
            <ul class="styless">
              <li>
                <p class="rules_add_article">
                  *Cada articulo tiene que tener un codigo de identificacion unico e irrepetible
                </p>
              </li>          
              <li>
                <p class="rules_add_article">
                  *Cada articulo debe pertenecer a una categoria, no se puede completar el registro sin haber escogido una categoria previamente
                </p>
              </li>
            </ul>
          </div>
        </div>
  	</div>
@endsection