@extends('admin.principal')
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
              <h3 class="box-title">Editar Cargo de ejecutor</h3>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('ejecutor.update',$ejecutor->id) }}" method="POST">
            @csrf
            @method('PUT')
              <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Nombre:</strong>
                          <input type="text" name="nombre" value="{{ $ejecutor->nombre }}" class="form-control" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                          <strong>Direccion:</strong>
                          <input type="text" name="direccion" value="{{ $ejecutor->direccion }}" class="form-control" placeholder="Direccion">
                      </div>
                      <div class="form-group">
                          <strong>Ornato:</strong>
                          <input type="text" name="ornato" value="{{ $ejecutor->ornato }}" class="form-control" placeholder="Ornato">
                      </div>


                      <div class="form-group">
                        <label for="cargoejecutor_id">Cargo:</label>
                        <select name="cargoejecutor_id" id="cargoejecutor_id" class="form-control selectpicker" data-live-search="true">
                          @foreach($cargoejecutor as $c)
                              @if ($c->id==$ejecutor->id)
                            <option value="{{$c->id}}" selected>{{$c->nombre}}</option>
                            @else
                            <option value="{{$c->id}}">{{$c->nombre}}</option>
                            @endif
                            @endforeach
                          </select>
                      </div>




                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
              </div>
   
            </form>
            </div>
</div>
@stop