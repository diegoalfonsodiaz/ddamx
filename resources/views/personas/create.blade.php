@extends('admin.principal')

@section('header')
<h1>
        Crear persona
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Personas</li>
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
            <form role="form" method="POST" action="{{route('personas.store')}}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label >DPI</label>
                  <input type="text" class="form-control input-lg" name="dpi" placeholder="DPI" required>
                </div>
                <div class="form-group">
                  <label >Nombres</label>
                  <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombres" required>
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
                  <label >Boleto de ornato</label>
                  <input type="text" class="form-control input-lg" name="ornato" placeholder="Boleto de ornato">
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