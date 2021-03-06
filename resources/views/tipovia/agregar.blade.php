@extends('admin.principal')

@section('header')
  <h1> Crear tipo de vía </h1>
  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Mantenimiento</li>
    <li class="active">Tipos de vía</li>
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
            <form autocomplete="off" action="{{ url('/insertartipovia') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Ingresar Tipo Vía">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Descripción</label>
                  <input type="text" name="descripcion" class="form-control" placeholder="Descripcion Tipo Vía">
                </div>


              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger pull-right" href="{{ url('/tipovia') }}"> Regresar </a> 
              </div>
            </form>
          </div>
@stop 