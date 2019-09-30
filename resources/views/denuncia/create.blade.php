@extends('admin.principal')
@section('header')
    <h1>Crear estado</h1>
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
        <form role="form" method="POST" action="{{route('denuncia.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="box-body">

                <div class="form-group">
                    <strong>Descripción</strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="nombre">
                </div>

                <div class="form-group">
                    <label for="direccion_fab">Fecha</label>
                    <input type="date" name="fecha" class="form-control" >
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Seleccione Imagen</label>
                    <input name="foto" type="file" class="form-control" id="exampleInputPassword1" placeholder="Seleccione una imagen">
                </div>

                <div class="form-group">
                    <strong>Estado Denuncia</strong>
                    <select name="estadodenuncia_id" id="estadodenuncia_id"  class="form-control selectpicker" data-live-search="true">
                        <option value="0" disabled selected>=== Seleccione Estado Denuncia ===</option>
                            @foreach($estado as $d)
                                <option value="{{$d->id}}">{{$d->descripcion}}</option>
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