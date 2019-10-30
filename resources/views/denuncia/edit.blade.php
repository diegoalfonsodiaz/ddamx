@extends('admin.principal')

@section('header')
  <h1>
     Cambio de estado
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">denuncias</li>
  </ol>
@stop

@section('contenido')
<div class="box box-primary">
                
            <div class="box-header with-border">
        
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{ route('denuncia.update',$denuncia->id) }}" enctype="multipart/form-data">
            {{csrf_field()}} {{ method_field('PUT')}}
              
              <div class="box-body">

                  <div class="form-group">
                    <label for="estadodenuncia_id">Estado de la denuncia</label>
                    <select class="form-control input-lg" name="estadodenuncia_id" id="estadodenuncia_id" class="form-control selectpicker" data-live-search="true">
                      @foreach($estado as $e)
                        @if ($e->id==$denuncia->id)
                          <option value="{{$e->id}}" selected>{{$e->descripcion}}</option>
                          @else
                          <option value="{{$e->id}}">{{$e->descripcion}}</option>
                        @endif
                      @endforeach
                    </select>
                  </div>
                  
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Aceptar</button> 
                    <a href="{{route('denuncia.index')}}" class="btn btn-danger pull-right"> Regresar</a> 
                </div>
            </form>
          </div>
@stop