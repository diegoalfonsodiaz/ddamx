@extends('admin.principal')
@section('contenido')
  <div class="box box-primary">
                  
      <div class="box-header with-border">

      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="POST" action="{{ route('denuncia.update',$denuncia->id) }}" enctype="multipart/form-data">
      
      @csrf
      @method('PUT')

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">
                        <strong>Descripción:</strong>
                        <input type="text" name="descripcion" value="{{ $denuncia->descripcion }}" class="form-control" placeholder="Descripcion">
                    </div>

                    <div class="form-group">
                        <label for="direccion_fab">Fecha</label>
                        <input type="date" name="fecha" value="{{ $denuncia->fecha }}"  class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Seleccione Imagen</label>
                        <input name="foto" type="file" class="form-control" value="{{ $denuncia->foto }}" placeholder="Seleccione una imagen">
                    </div>
                    

                    <div class="form-group">
                      <label for="estadodenuncia_id">Estado Denuncia:</label>
                      <select name="estadodenuncia_id" id="estadodenuncia_id" class="form-control selectpicker" data-live-search="true">
                        @foreach($estado as $e)
                            @if ($e->id==$denuncia->id)
                          <option value="{{$e->id}}" selected>{{$e->descripcion}}</option>
                          @else
                          <option value="{{$e->id}}">{{$e->descripcion}}</option>
                          @endif
                          @endforeach
                        </select>
                    </div>
        <!-- /.box-body -->
        </div>
                    <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Aceptar</button> 
                          <a href="{{route('denuncia.index')}}" class="btn btn-danger pull-right"> Regresar</a> 
                      </div>
          
        </div>
      </form>
  </div>
@stop