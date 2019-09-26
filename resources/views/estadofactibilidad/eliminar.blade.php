@extends('admin.principal')
@section('contenido')

    <div class="card" style="width: 22rem;">
        <div class="card-body">
        <form action='{{ url("/delete/{$estadofacti->id}") }}' method="POST">
        {{ csrf_field() }}
            <h3>Eliminar Estado</h3>
            <label for="">Nombre: </label>
            <strong><label>{{ $estadofacti->nombre }}</label></strong>
            <input type="hidden" name="nombre" value="{{ $estadofacti->nombre }}" class="form-control" placeholder="Estado Factibilidad">
            <br>
            <label for="">Estado: </label>
            <strong><label>
                @if($estadofacti->estado == 1)
                <a href="#" class="badge badge-primary">Activado</a>
                @endif
                @if($estadofacti->estado == 0)
                <a href="#" class="badge badge-danger">Desactivado</a>
                @endif
            </label></strong><br>
            <input type="hidden" name="estado" value="0" class="form-control" placeholder="Estado Factibilidad">
            
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="{{ url('/estadofactibilidad') }}"> Cancelar </a> 
            </form>
        </div>
    </div>

@stop