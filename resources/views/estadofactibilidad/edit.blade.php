@extends('admin.principal')

@section('header')
  <h1> Editar Estado </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Estados</li>
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
      <form action="{{ route('estadofactibilidad.update', $estadofactibilidad->id) }}" method="POST">
      
        {{ csrf_field() }}
        @method('PUT')
          
          <div class="box-body">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="{{ $estadofactibilidad->nombre }}" class="form-control" placeholder="Nombre">
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