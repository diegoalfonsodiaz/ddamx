@extends('admin.principal')
@section('header')
<h1>
        Editar ejecutor
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">ejecutores</li>
      </ol>
@stop
@section('contenido')

@if(count($errors)>0)
<button type="buttom" class="close" data-dismiss="alert">Cerrar</button>
    @foreach($errors->all() as $error)
        <div class="alert alert-danger"> 
            <button type="buttom" class="close" data-dismiss="alert">Cerrar</button>
            {{ $error }}
        </div>
    @endforeach
@endif
<div class="box box-primary">
            <div class="box-header with-border">
         
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('ejecutor.update',$ejecutor->id) }}" method="POST">
            @csrf
            @method('PUT')
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Nombre</strong>
                          <input type="text" autocomplete="off" name="nombre" value="{{ $ejecutor->nombre }}" class="form-control" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                          <strong>Dirección</strong>
                          <input type="text" autocomplete="off" name="direccion" value="{{ $ejecutor->direccion }}" class="form-control" placeholder="Dirección">
                      </div>
                      <div class="form-group">
                          <strong>Boleto de ornato</strong>
                          <input type="text" autocomplete="off" name="ornato" value="{{ $ejecutor->ornato }}" class="form-control" placeholder="Boleto de ornato">
                      </div>


                      <div class="form-group">
                        <label for="cargoejecutor_id">Cargo</label>
                        <select name="cargoejecutor_id" id="cargoejecutor_id" class="form-control selectpicker" data-live-search="true">
                            @foreach ($cargoejecutor as $cargo)
                              <option 
                                value="{{ $cargo->id }}"
                                @if ($cargo->id === $ejecutor->cargoejecutor_id)
                                  selected
                                @endif
                              > 
                              {{ $cargo->nombre }} 
                              </option>
                            @endforeach
                          </select>
                      </div>




                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
              </div>
   
            </form>
            </div>
</div>
@stop