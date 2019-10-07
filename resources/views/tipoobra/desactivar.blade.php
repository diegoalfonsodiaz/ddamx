@extends('admin.principal')
@section('contenido')

    <div class="card" style="width: 22rem;">
        <div class="card-body">
        <form action='{{ url("/deshabilitado/{$tipoobra->id}") }}' method="POST">
        {{ csrf_field() }}
            <h3>Cambiar Estado</h3>
            <label for="">Nombre: </label>
            <strong><label>{{ $tipoobra->nombre }}</label></strong>
            <input type="hidden" name="nombre" value="{{ $tipoobra->nombre }}" class="form-control" placeholder="Tipo de obra">
            <br>
            <label for="">Estado: </label>
            <strong><label>
                @if($tipoobra->estado == 1)
                <!--<a type="badge" href="#" class="badge badge-primary">Activo</a>-->
                <a class="label label-success">Activado</a>
                @endif
                @if($tipoobra->estado == 0)
                <!--<a href="#" class="badge badge-danger">Desactivo</a>-->
                <a class="label label-danger">Desactivado</a>
                @endif
            </label></strong><br>
            <input type="hidden" name="estado" value="0" class="form-control" placeholder="Tipo de obra">
            @if($tipoobra->estado == 0)
                <button type="submit" class="btn btn-primary">Activar</button>
            @endif
            @if($tipoobra->estado == 1)
                <button type="submit" class="btn btn-primary">Desactivar</button>
            @endif
            <a class="btn btn-danger" href="{{ url('/tipoobra') }}"> Cancelar </a> 
            </form>
        </div>
    </div>

@stop