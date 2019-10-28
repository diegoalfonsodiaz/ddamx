@extends('admin.principal')
@section('contenido')
@if(count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>    
        </ul>  
        
    @endforeach
    </div>
@endif
<div class="box box-primary" >
            <div class="box-header with-border">
              <h1 class="box-title">Crear </h1>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('ejecutor.store') }}" method="POST">
            {!! csrf_field() !!}
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre</strong>
                            <input type="text" name="nombre" class="form-control" placeholder="nombre">
                        </div>
                        <div class="form-group">
                            <strong>Direccion</strong>
                            <input type="text" name="direccion" class="form-control" placeholder="direccion">
                        </div>
                        <div class="form-group">
                            <strong>Ornato</strong>
                            <input type="text" name="ornato" class="form-control" placeholder="ornato">
                        </div>
                        <div class="form-group">
                            <strong>Cargo</strong>
                            <select name="cargoejecutor_id" id="cargoejecutor_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione Cargo===</option>
                                    @foreach($cargo as $c)
                                        <option value="{{$c->id}}">{{$c->nombre}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
   
            </form>
</div>
@stop