@extends('admin.principal')
@section('contenido')
<div class="box box-primary" >
            <div class="box-header with-border">
              <h1 class="box-title">Crear Asunto </h1>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('asunto.store') }}" method="POST">
            @csrf
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre</strong>
                            <input type="text" name="nombre" class="form-control" placeholder="nombre">
                        </div>
                        <div class="form-group">
                            <strong>Descripcion</strong>
                            <input type="text" name="descripcion" class="form-control" placeholder="descripcion">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
   
            </form>
</div>
@stop