@extends('admin.principal')
@section('contenido')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3> Detalles del Estado Licencia</h3>
            <br>

        <div>
            <label for="#"><h4>Nombre: </h4></label>
                <strong><label>{{ $estadolicen->nombre }}</label></strong>
            <br>

            <div>
            <label for="#"><h4>Descripcion: </h4></label>
                <strong><label>{{ $estadolicen->descripcion }}</label></strong>
            <br>

                <br>
                <label for="#"><h4>Fecha de creacion: </h4></label>
                    <strong><label>{{ $estadolicen->created_at }}</label></strong>


            </div>
            <div>
                <a class="btn btn-danger" href="{{ url('/estadolicencia') }}"> Regresar </a><br>
            </div>
        </div>

    </div>
@stop