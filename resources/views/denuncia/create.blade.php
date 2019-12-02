@extends('admin.principal')

@section('header')
<h1>
        Crear denuncia
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">denuncias</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary">
    <div class="box-header">
        @if($errors->any())
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                Ingrese  imágenes  con  formato  JPG,  JPEG,  BMP,  PNG.
                <button type="button" class="close" data-dismiss="alert" alert-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
    </div>
                <!-- /.box-header -->
                <!-- form start -->
            <form role="form" method="POST" action="{{route('denuncia.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="box-body">

                    <div class="form-group">
                        <strong>Dirección y descripcion de la denuncia</strong>
                        <textarea type="text" autocomplete="off" name="descripcion" class="form-control" rows="3" placeholder="Dirección y descripcion de la denuncia" required></textarea>
                        <!-- <input type="text" name="descripcion" class="form-control" placeholder="Descripción"> -->
                    </div>
                    <div class="form-group">
                                <strong>Nombre del contacto</strong>
                                <input type="text" autocomplete="off" name="direccion" class="form-control" placeholder="Nombre del contacto">
                    </div>
                    <div class="form-group">
                                <strong>Teléfono</strong>
                                <input type="text" autocomplete="off" name="telefono" class="form-control" placeholder="Teléfono">
                            </div>

                    

                    <div class="form-group" style="display: none">
                        <label for="direccion_fab">Fecha</label>
                        <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Seleccione una imagen</label>
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
</div>
@stop