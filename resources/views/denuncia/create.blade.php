@extends('admin.principal')
@section('header')
    <h1>Nueva Denuncia</h1>
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
        <form role="form" method="POST" action="{{route('denuncia.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="box-body">

                <div class="form-group">
                    <strong>Descripción</strong>
                    <textarea type="text" name="descripcion" class="form-control" rows="3" placeholder="Descripción" required></textarea>
                    <!-- <input type="text" name="descripcion" class="form-control" placeholder="Descripción"> -->
                </div>

                

                <div class="form-group">
                    <label for="direccion_fab">Fecha</label>
                    <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Seleccione Imagen</label>
                    <input name="foto" type="file" class="form-control" id="exampleInputPassword1" placeholder="Seleccione una imagen" required>
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