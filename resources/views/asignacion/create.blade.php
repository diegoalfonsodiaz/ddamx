@extends('admin.principal')

@section('header')
  <h1>Crear asignación</h1>
  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">usarios</li>
    <li class="active">asignacion de roles</li>
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
    <form action="{{ route('asignacion.store') }}" method="POST">
        {{ csrf_field() }}

        <div class="box-body">
            
            <div class="form-group">
                <strong>Usuario</strong>
                <select name="user_id" id="user_id"  class="form-control selectpicker" data-live-search="true">
                <option value="0" disabled selected>=== Seleccione usuario ===</option>
                @foreach($usuario as $u)
                    <option value="{{$u->id}}">{{$u->name}}</option>
                @endforeach
            </select>
            
            <br>

            <div class="form-group">
                <strong>Rol</strong>
                <select name="role_id" id="role_id"  class="form-control selectpicker" data-live-search="true">
                <option value="0" disabled selected>=== Seleccione rol ===</option>
                @foreach($rol as $r)
                    <option value="{{$r->id}}">{{$r->nombre}}</option>
                @endforeach
            </select>
            
            
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger pull-right" href="{{ url('/asignacion') }}"> Regresar </a> 
            </div>
            
        </div>
    </form>
</div>
@stop