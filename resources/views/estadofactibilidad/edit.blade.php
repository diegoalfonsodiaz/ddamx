@extends('admin.principal')

@section('header')
  <h1> Editar estado de factibilidad </h1>
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
              {{ $error }}
            </div>
          @endforeach
        @endif
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form autocomplete="off" action="{{ route('estadofactibilidad.update', $estadofactibilidad->id) }}" method="POST">
      
        {{ csrf_field() }}
        @method('PUT')
          
          <div class="box-body">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ $estadofactibilidad->nombre }}" class="form-control" placeholder="Nombre" required>
            </div>
          </div>
            
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger pull-right" href="{{ url('/estadofactibilidad') }}"> Regresar </a> 
          </div>
      </form>
  </div>
@stop