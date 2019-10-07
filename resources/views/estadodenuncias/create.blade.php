@extends('admin.principal')

@section('header')
<h1>
        Crear estado
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Estados</li>
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
            <form role="form" method="POST" action="{{route('estadodenuncias.store')}}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label >Descripción</label>
                  <input type="text" class="form-control input-lg" name="descripcion" placeholder="descripción" required>
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <a href="{{route('estadodenuncias.index')}}" class="btn btn-danger pull-right"> Regresar</a> 
                </div>
            </form>
          </div>
@stop