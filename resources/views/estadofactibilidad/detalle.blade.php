@extends('admin.principal')
@section('contenido')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3> Detalles del Estado de Factibilidad</h3>
            <br>

        <div>
            <label for="#"><h4>Estado: </h4></label>
                <strong><label>{{ $estadofacti->nombre }}</label></strong>
            <br>

            <label for="#"><h4>Estado: </h4> </label>
                <strong><label>
                    @if($estadofacti->estado == 1)
                        <a class="label label-success">Activo</a>
                    @endif
                    @if($estadofacti->estado == 0)
                        <a class="label label-danger">Desactivado</a>
                    @endif
                </label></strong>

                <br>
                <label for="#"><h4>created_at: </h4></label>
                    <strong><label>{{ $estadofacti->created_at }}</label></strong>

                <br>
                <label for="#"><h4>updated_at: </h4></label>
                    <strong><label>{{ $estadofacti->updated_at }}</label></strong>

            </div>
            <div>
                <a class="btn btn-danger" href="{{ url('/estadofactibilidad') }}"> Regresar </a><br>
            </div>
        </div>
            
    </div>
@stop

