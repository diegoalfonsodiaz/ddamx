@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar tipo de obra</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('tipoobras.update',$tipoobra) }}" method="POST">
             @csrf
        @method('PUT')
        {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" value="{{ $tipoobra->nombre }}" class="form-control" placeholder="Nombre">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              
              </div>
            </form>
          </div>
@stop