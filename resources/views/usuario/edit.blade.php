@extends('admin.principal')

@section('header')
  <h1> Editar Usuario </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Usuarios</li>
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
      <form action="{{ route('usuario.update', $usuario->id) }}" method="POST">
      
        {{ csrf_field() }}
        @method('PUT')
          
            <div class="box-body">
                <div class="form-group">
                    <label>Usuario:</label>
                    <input type="text" name="name" value="{{ $usuario->name }}" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Correo Electrónico:</label>
                    <input type="text" name="email" value="{{ $usuario->email }}" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" name="password" value="{{ $usuario->password }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger pull-right" href="{{ url('/usuario') }}"> Regresar </a> 
          </div>
      </form>
  </div>
@stop