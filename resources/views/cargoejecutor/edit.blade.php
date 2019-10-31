@extends('admin.principal')

@section('header')
<h1>
        Editar cargos de ejecutor
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Mantenimiento</li>
        <li class="active">Cargo de ejecutores</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            <!-- /.box-header -->
            <!-- form start -->
            <form autocomplete="off" action="{{ route('cargoejecutor.update',$cargoejecutor->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre</strong>
                    <input type="text" name="nombre" value="{{ $cargoejecutor->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
   
    </form>
</div>
@stop