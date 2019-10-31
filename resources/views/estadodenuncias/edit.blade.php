@extends('admin.principal')

@section('header')
<h1>
        Editar estado de denuncia
      
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Mantenimiento</li>
        <li class="active">Estados de denuncias</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary">
  
            <!-- /.box-header -->
            <!-- form start -->
            <form autocomplete="off" role="form" method="POST" action="{{route('estadodenuncias.update', $estadodenuncia)}}">
            {{csrf_field()}} {{ method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label >Descripción</label>
                  <input type="text" class="form-control input-lg" name="descripcion" placeholder="Descripción" value="{{old('descripcion',$estadodenuncia->descripcion)}}" required>
                  
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button> 
                    <a href="{{route('estadodenuncias.index')}}" class="btn btn-danger pull-right"> Regresar</a> 
                </div>
            </form>
          </div>
@stop