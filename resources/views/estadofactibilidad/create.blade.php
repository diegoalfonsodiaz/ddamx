@extends('admin.principal')

@section('header')
  <h1> Crear estado de factibilidad </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Manteninimiento</li>
    <li class="active">Estados de factibilidad</li>
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
            <form autocomplete="off" action="{{ route('estadofactibilidad.store') }}" method="POST">
            {{ csrf_field() }}

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Ingresar estado de factibilidad" required>
                </div>
                
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger pull-right" href="{{ url('/estadofactibilidad') }}"> Regresar </a> 
              </div>
            </form>
          </div>
@stop