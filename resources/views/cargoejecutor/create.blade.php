@extends('admin.principal')
@section('contenido')

<<<<<<< HEAD

=======
>>>>>>> d0feaa091efc1768a3365264780088e28e46f0a7

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
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
   
</form>
</div>
@stop