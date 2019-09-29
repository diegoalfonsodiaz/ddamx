@extends('admin.principal')

@section('header')
<h1>
        Crear Personas
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Personas</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('personas.store')}}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label >DPI</label>
                  <input type="text" class="form-control input-lg" name="dpi" placeholder="DPI" required>
                </div>
                <div class="form-group">
                  <label >Nombre</label>
                  <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                  <label >Apellidos</label>
                  <input type="text" class="form-control input-lg" name="apellido" placeholder="Apellidos" required>
                </div>
                <div class="form-group">
                  <label >Teléfono</label>
                  <input type="text" class="form-control input-lg" name="telefono" placeholder="Teléfono" required >
                </div>
                <div class="form-group">
                  <label >Correo electrónico</label>
                  <input type="email" class="form-control input-lg " name="correo" placeholder="Correo electrónico">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <a href="{{route('personas.index')}}" class="btn btn-danger pull-right"> Regresar</a> 
                </div>
            </form>
          </div>
@stop