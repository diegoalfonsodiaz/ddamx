@extends('front.base')

@section('contenido_front')
<div class="container">
<div class="box box-primary">
        <div class="box-header with-border">
              <h3 class="box-title">Realize su denuncia</h3>
        </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form role="form" method="POST" action="{{route('denunciaexterna.store')}}" enctype="multipart/form-data">
        {{csrf_field()}} 
            <div class="box-body">

                <div class="form-group">
                    <strong>Descripción de la denuncia</strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="nombre">
                </div>

                <div class="form-group" style="display: none">
                    <label for="direccion_fab">Fecha en que sucedio</label>
                    <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control"  >
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Seleccione Imagen como prueba</label>
                    <input name="foto" type="file" class="form-control" id="exampleInputPassword1" placeholder="Seleccione una imagen">
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Aceptar</button>
                <a href="{{url('/denunciaexterna')}}" class="btn btn-danger pull-right"> Regresar</a> 
            </div>
        </form>
    </div>
</div>

@stop