@extends('layouts.principal')

@section('content')
	<div class="col-md-9 mg-top borde-left">
        <div class="col-md-9 pull-left col-md-offset-1">
          <form action="">
            <div class="form-group mg-top">
              <label for="Nombre">Nombre del Usuario:</label>
              <input type="text" placeholder="Inserta un nombre" class="form-control">
            </div>
            <div class="form-group mg-top">
              <label for="Codigo">Codigo del Usuario:</label>
              <input type="text" placeholder="Inserta su codigo" class="form-control">
            </div>
            <div class="form-group  mg-top">
              <label for="Nombre">Carrera:</label>
              <select name="carrera" id="" class="form-control">
                <option value="0">Elige tu carrera..</option>
                <option value="1">Licenciatura en Psicologia</option>
                <option value="2">Ingenieria en Telematica</option>
                <option value="3">Licenciatura en Derecho</option>
              </select>
            </div>
            <input type="submit" class="btn btn-success mg-top pull-right" value="Registrar">
          </form>
        </div>
      </div>
@endsection