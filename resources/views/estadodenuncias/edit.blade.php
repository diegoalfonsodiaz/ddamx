@extends('admin.principal')

@section('header')
<h1>
        Editar Estado
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Estados</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary">
                
            <div class="box-header with-border">
        
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('estadodenuncias.update', $estadodenuncia)}}">
            {{csrf_field()}} {{ method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label >Descripción</label>
                  <input type="text" class="form-control input-lg" name="descripcion" placeholder="descripción" value="{{old('descripcion',$estadodenuncia->descripcion)}}" required>
                  
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