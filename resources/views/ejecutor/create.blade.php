@extends('admin.principal')
@section('header')
<h1>
        Crear ejecutor
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">ejecutores</li>
      </ol>
@stop
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
         
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('ejecutor.store') }}" method="POST">
            {!! csrf_field() !!}
        
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre</strong>
                            <input type="text" autocomplete="off" name="nombre" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <strong>Dirección</strong>
                            <input type="text" autocomplete="off" name="direccion" class="form-control" placeholder="Dirección">
                        </div>
                        <div class="form-group">
                            <strong>Boleto de ornato</strong>
                            <input type="text" autocomplete="off" name="ornato" class="form-control" placeholder="Boleto de ornato">
                        </div>
                        <div class="form-group">
                            <strong>Cargo</strong>
                            <select name="cargoejecutor_id" id="cargoejecutor_id"  class="form-control selectpicker" data-live-search="true">
                                <option value="0" disabled selected>=== Seleccione un cargo===</option>
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