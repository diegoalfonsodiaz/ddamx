@extends('admin.principal')
@section('contenido')

    <div class="card" style="width: 40rem;">
        <div class="card-body">
        <form action='{{ url("/deletetipovia/{$tpv->id}") }}' method="POST">
        {{ csrf_field() }}
            <h3>¿Desea eliminar el estado?</h3>
            <label for="">Nombre: </label>
            <strong><label>{{ $tpv->nombre }}</label></strong>
            <input type="hidden" name="nombre" value="{{ $tpv->nombre }}" class="form-control" placeholder="Tipo vía">
            <br>
            <label for="">Estado: </label>
            <strong><label>
                @if($tpv->estado == 1)
                <a href="#" class="badge badge-primary">Activado</a>
                @endif
                @if($tpv->estado == 0)
                <a href="#" class="badge badge-danger">Desactivado</a>
                @endif
            </label></strong><br>
            <input type="hidden" name="estado" value="0" class="form-control" placeholder="Tipo vía">

            <button type="submit" class="btn btn-primary">Eliminar</button>
            <a class="btn btn-danger" href="{{ url('/tipovia') }}"> Cancelar </a> 
            </form>
        </div>
    </div>

@stop 