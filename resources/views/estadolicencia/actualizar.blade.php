@extends('admin.principal')

@section('header')
  <h1> Editar Estado Licencia </h1>
  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Estado Licencia</li>
  </ol>
@stop

@section('contenido')
  
    <div class="box-header with-border">
      @if(count($errors)>0)
        @foreach($errors->all() as $error)
          <div class="alert alert-danger"> 
            <button type="button" class="close" data-dismiss="alert" alert-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            {{ $error }}
          </div>
        @endforeach
      @endif
    </div>

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
                  <input type="text" name="nombre" value="{{ $estadolicen->nombre }}" class="form-control" placeholder="Estado Licencia" require>
                </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Descripción</label>
              <input type="text" name="descripcion" value="{{ $estadolicen->descripcion }}" class="form-control" placeholder="Estado Licencia" require>
            </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger pull-right" href="{{ url('/estadolicencia') }}"> Regresar </a> 
              </div>
            </form>
          </div>
@stop