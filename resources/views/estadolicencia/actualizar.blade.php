@extends('admin.principal')

@section('header')
  <h1> Editar estado de licencia </h1>
  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Mantenimiento</li>
    <li class="active">Estados de licencias</li>
  </ol>
@stop

@section('contenido')


<div class="box box-primary">
 
            <!-- /.box-header -->
            <!-- form start -->
            <form autocomplete="off" action='{{ url("/update/{$estadolicen->id}") }}' method="POST">

            {{ csrf_field() }}
            
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" value="{{ $estadolicen->nombre }}" class="form-control" placeholder="Estado de licencia" require>
                </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Descripción</label>
              <input type="text" name="descripcion" value="{{ $estadolicen->descripcion }}" class="form-control" placeholder="Descripción de licencia" require>
            </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger pull-right" href="{{ url('/estadolicencia') }}"> Regresar </a> 
              </div>
            </form>
          </div>
@stop