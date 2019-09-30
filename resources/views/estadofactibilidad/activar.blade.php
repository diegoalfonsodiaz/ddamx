@extends('admin.principal')
@section('contenido')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3>Cambiar Estado</h3>
            <form action='{{ url("/habilitadofacti/{$estadofacti->id}") }}' method="POST">
            {{ csrf_field() }}
                
                <label for="#"><h4>Nombre: </h4></label>
                <strong><label>{{ $estadofacti->nombre }}</label></strong>
                <input type="hidden" name="nombre" value="{{ $estadofacti->nombre }}" class="form-control" placeholder="Estado Factibilidad">
                <br>
                <label for="#"><h4>Estado: </h4></label>
                <strong><label>
                    @if($estadofacti->estado == 1)
                    <a class="label label-success">Activado</a>
                    @endif
                    @if($estadofacti->estado == 0)
                    <a class="label label-danger">Desactivado</a>
                    @endif
                </label></strong>
                
                <br>

                <input type="hidden" name="estado" value="1" class="form-control" placeholder="Estado Factibilidad"><br>
                @if($estadofacti->estado == 0)
                    <button type="submit" class="btn btn-primary">Activar</button>
                @endif
                @if($estadofacti->estado == 1)
                    <button type="submit" class="btn btn-primary">Desactivar</button>
                @endif
                <a class="btn btn-danger" href="{{ url('/estadofactibilidad') }}"> Cancelar </a> 
            </form>
        </div>
    </div>

@stop