@extends('admin.principal')
@section('header')
<h1>
        Editar tipo de obra
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Mantenimiento</li>
        <li class="active">Tipos de obra</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form autocomplete="off" action="{{ route('tipoobras.update',$tipoobra) }}" method="POST">
             @csrf
        @method('PUT')
        {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" value="{{ $tipoobra->nombre }}" class="form-control" placeholder="Nombre">
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              
              </div>
            </form>
          </div>
@stop