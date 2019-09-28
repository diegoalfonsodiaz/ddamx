@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Estado Licencia</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action='{{ url("/update/{$estadolicen->id}") }}' method="POST">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" value="{{ $estadolicen->nombre }}" class="form-control" placeholder="Estado Licencia">
                  <input type="hidden" name="estado" value="{{ $estadolicen->estado }}" class="form-control" placeholder="Estado Licencia">
                </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Descripcion</label>
              <input type="text" name="descripcion" value="{{ $estadolicen->descripcion }}" class="form-control" placeholder="Estado Licencia">
              <input type="hidden" name="estado" value="{{ $estadolicen->estado }}" class="form-control" placeholder="Estado Licencia">
            </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="{{ url('/estadofactibilidad') }}"> Regresar </a> 
              </div>
            </form>
          </div>
@stop