@extends('admin.principal')
@section('contenido')

<?
@if($errors->any()) 
    <div class="alert alert-danger"></div>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endif
>

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