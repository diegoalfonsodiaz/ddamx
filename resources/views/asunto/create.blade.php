@extends('admin.principal')

@section('header')
  <h1> Crear asuntos de bitácora </h1>
  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Mantenimiento</li>
    <li class="active">Asuntos de bitácora</li>
  </ol>
@stop

@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
              @if(count($errors)>0)
                @foreach($errors->all() as $error)
                  <div class="alert alert-danger"> 
                    <button type="button" class="close" data-dismiss="alert" alert-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    {{ $error }}
                  </div>
                @endforeach
              @endif
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form autocomplete="off" action="{{ route('asunto.store') }}" method="POST">
            @csrf
        
            <div class="box-body">
                <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>            
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
                        </div>
                        <div class="form-group">
                            <strong>Descripción</strong>
                            <input type="text" name="descripcion" class="form-control" placeholder="descripcion">
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a class="btn btn-danger pull-right" href="{{ url('/asunto') }}"> Regresar </a> 
                    </div>
                </div>
   
            </form>
</div>
@stop