@extends('admin.principal')
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              <h2 >Ingresar Nuevo Tipo de Vía</h2>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ url('/insertartipovia') }}" method="POST">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" name="nombre" class="form-control" placeholder="Ingresar Tipo Vía">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Descripcion</label>
                  <input type="text" name="descripcion" class="form-control" placeholder="Descripcion Tipo Vía">
                </div>


              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-danger" href="{{ url('/tipovia') }}"> Regresar </a> 
              </div>
            </form>
          </div>
@stop 