@extends('admin.principal')

@section('header')
<h1>
        Crear tipo de obra
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Tipo obra</li>
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
            <form role="form" method="POST" action="{{route('tipoobras.store')}}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label >Nombre</label>
                  <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombre" required>
                </div>
              
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <a href="{{route('tipoobras.index')}}" class="btn btn-danger pull-right"> Regresar</a> 
                </div>
            </form>
          </div>
@stop