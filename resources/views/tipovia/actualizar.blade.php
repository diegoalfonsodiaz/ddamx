@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Tipo vía</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action='{{ url("/updatetipovia/{$tpv->id}") }}' method="POST">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" value="{{ $tpv->nombre }}" class="form-control" placeholder="Tipo vía">
                  <input type="hidden" name="estado" value="{{ $tpv->estado }}" class="form-control" placeholder="Tipo vía">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Descripcion</label>
                  <input type="text" name="descripcion" value="{{ $tpv->descripcion }}" class="form-control" placeholder="Tipo vía">
                  <input type="hidden" name="estado" value="{{ $tpv->estado }}" class="form-control" placeholder="Tipo vía">
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="{{ url('/tipovia') }}"> Regresar </a> 
              </div>
            </form>
          </div>
@stop 