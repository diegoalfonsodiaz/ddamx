@extends('admin.principal')

@section('header')
  <h1> Editar usuario </h1>
  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">usuarios</li>
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
      <form autocomplete="off" action="{{ route('usuario.update', $usuario->id) }}" method="POST">
      
        {{ csrf_field() }}
        @method('PUT')
          
            <div class="box-body">
                <div class="form-group">
                    <label>Nombre de usuario </label>
                    <input type="text" name="name" value="{{ $usuario->name }}" class="form-control" placeholder="Nombre de usuario" required>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Correo electrónico</label>
                    <input type="email" name="email" value="{{ $usuario->email }}" class="form-control" placeholder="Correo electrónico" required>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password"  class="form-control" placeholder="Contraseña" required>
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