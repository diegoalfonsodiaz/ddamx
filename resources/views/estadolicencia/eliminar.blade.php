@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
  <div class="box-header with-border">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
        <form action='{{ url("/delete/{$estadolicen->id}") }}' method="POST">
        {{ csrf_field() }}
            <h3>¿Desea eliminar el Registro?</h3>
            <label for="">NOMBRE: </label>
            <strong><label>{{ $estadolicen->nombre }}</label></strong>
            <input type="hidden" name="nombre" value="{{ $estadolicen->nombre }}" class="form-control" placeholder="Estado Licencia">
            <br>
            <label for="">DESCRIPCIÓN: </label>
            <strong><label>{{ $estadolicen->descripción }}</label></strong>
            <input type="hidden" name="descripcion" value="{{ $estadolicen->descripcion }}" class="form-control" placeholder="Estado Licencia">
            <br>
            <button type="submit" class="btn btn-primary">Eliminar</button>
            <a class="btn btn-danger" href="{{ url('/estadolicencia') }}"> Cancelar </a> 
            </form>
        </div>
    </div>

@stop