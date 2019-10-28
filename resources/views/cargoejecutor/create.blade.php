@extends('admin.principal')
@section('contenido')



@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger"> 
            <button type="buttom" class="close" data-dismiss="alert">Cerrar</button>
            {{ $error }}
        </div>
    @endforeach
@endif


<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Cargo ejecutor</h3>
            <!-- /.box-header -->
            <!-- form start -->

            
            <form action="{{ route('cargoejecutor.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
   
</form>
</div>
@stop