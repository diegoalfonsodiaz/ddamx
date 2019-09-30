@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Actualizar Tipo de obra</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('tipoobra.update',$tipoobra->id) }}" method="POST">
             @csrf
        @method('PUT')
        {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" value="{{ $tipoobra->nombre }}" class="form-control" placeholder="Nombre">
                  <input type="hidden" name="estado" value="{{ $tipoobra->estado }}" class="form-control" placeholder="Estado">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="{{ url('/tipoobra') }}"> Regresar </a> 
              </div>
            </form>
          </div>
@stop