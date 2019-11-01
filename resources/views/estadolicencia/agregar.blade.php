@extends('admin.principal')

@section('header')
  <h1> Crear estado de licencia </h1>
  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Mantenimiento</li>
    <li class="active">Estados de licencias</li>
  </ol>
@stop

@section('contenido')
<div class="box box-primary">
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

            <!-- /.box-header -->
            <!-- form start -->
            <form autocomplete="off" action="{{ url('/insertar') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Ingresar estado de licencia">              
                </div>
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Descripción</label>
                  <input type="text" name="descripcion" class="form-control" placeholder="Ingresar descripción de licencia">
                </div>
                
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger pull-right" href="{{ url('/estadolicencia') }}"> Regresar </a>
              </div>
            </form>
          </div>
@stop