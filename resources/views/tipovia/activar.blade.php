@extends('admin.principal')
@section('contenido')

    <div class="card" style="width: 40rem;">
        <div class="card-body">
        <form action='{{ url("/habilitadotipovia/{$tpv->id}") }}' method="POST">
        {{ csrf_field() }}
            <h3>¿Desea cambiar el estado?</h3>
            <label for="">Nombre: </label>
            <strong><label>{{ $tpv->nombre }}</label></strong>
            <input type="hidden" name="nombre" value="{{ $tpv->nombre }}" class="form-control" placeholder="Tipo vía">
            <br>
            <label for="">Descripcion: </label>
            <strong><label>{{ $tpv->descripcion }}</label></strong>
            <input type="hidden" name="descripcion" value="{{ $tpv->descripcion }}" class="form-control" placeholder="Tipo vía">
            <br>
            <label for="">Estado: </label>
            <strong><label>
                @if($tpv->estado == 1)
                <a class="label label-success">Activado</a>
                @endif
                @if($tpv->estado == 0)
                <a class="label label-danger">Desactivado</a>
                @endif
            </label></strong><br>
            <input type="hidden" name="estado" value="1" class="form-control" placeholder="Tipo vía">
            @if($tpv->estado == 0)
                <button type="submit" class="btn btn-primary">Activar</button>
            @endif
            @if($tpv->estado == 1)
                <button type="submit" class="btn btn-primary">Desactivar</button>
            @endif
            <a class="btn btn-danger" href="{{ url('/tipovia') }}"> Cancelar </a> 
            </form>
        </div>
    </div>

@stop 