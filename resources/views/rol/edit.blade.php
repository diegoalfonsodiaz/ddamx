@extends('admin.principal')

@section('header')
  <h1> Editar rol </h1>
  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">usuarios</li>
    <li class="active">rol</li>
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
      <form autocomplete="off" action="{{ route('rol.update', $rol->id) }}" method="POST">
      
        {{ csrf_field() }}
        @method('PUT')
          
            <div class="box-body">
                <div class="form-group">
                    <label>Nombre del rol</label>
                    <input type="text" name="nombre" value="{{ $rol->nombre }}" class="form-control" placeholder="Nombre del rol" required>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" name="descripcion" value="{{ $rol->descripcion }}" class="form-control" placeholder="Descripción" required>
                </div>
            </div>
            
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger pull-right" href="{{ url('/rol') }}"> Regresar </a> 
          </div>
      </form>
  </div>
@stop