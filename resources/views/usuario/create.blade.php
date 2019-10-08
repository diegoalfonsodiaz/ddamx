@extends('admin.principal')

@section('header')
  <h1> Crear Usuario </h1>
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
    <form action="{{ route('usuario.store') }}" method="POST">
        {{ csrf_field() }}

        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" name="name" class="form-control" placeholder="Ingresar Usuario">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Correo Electrónico</label>
                <input type="text" name="email" class="form-control" placeholder="Ingresar Correo Electrónico">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Ingresar Contraseña">
            </div>
            
            
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger pull-right" href="{{ url('/usuario') }}"> Regresar </a> 
            </div>
        </div>
    </form>
</div>
@stop