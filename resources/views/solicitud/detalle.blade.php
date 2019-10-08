@extends('admin.principal')
@section('contenido')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3> Detalles solicitud de licencia</h3>
            <br>
            @foreach($solicitud as $solicitudes)
             <div>
             
                <label for="#"><h4>Propietario: </h4></label>
                <strong><label>{{ $solicitudes->nombre_persona}} {{ $solicitudes->apellido}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <label for="#"><h4>Estado de factibilidad: </h4></label>
                <strong><label>{{ $solicitudes->nombre_estadofactibilidad }}</label></strong>
            <div>

            <div>
                 <label for="#"><h4>Direccion: </h4></label>
                <strong><label>{{ $solicitudes->direccionobra }}</label></strong>
            </div>

            <div>
                 <label for="#"><h4>Ejecutor: </h4></label>
                <strong><label>{{ $solicitudes->nombre_ejecutor }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <label for="#"><h4>Direccion del ejecutor: </h4></label>
                <strong><label>{{ $solicitudes->direccionejecutor }}</label></strong>
            </div>

          

            <div>
                 <label for="#"><h4>Finca No: </h4></label>
                <strong><label>{{ $solicitudes->numerofinca }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <label for="#"><h4>Folio No: </h4></label>
                <strong><label>{{ $solicitudes->numerofolio }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label></strong>
                <label for="#"><h4>Libro de: </h4></label>
                <strong><label>{{ $solicitudes->libro }}</label></strong>
            </div>

            <div>
                 <label for="#"><h4>No. Catastral: </h4></label>
                <strong><label>{{ $solicitudes->catastral }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>

                <label for="#"><h4>Solvencia Municipal: </h4></label>
                <strong><label>{{ $solicitudes->solvenciamunicipal }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <label for="#"><h4>Obra: </h4></label>
                <strong><label>{{ $solicitudes->nombre_tipoobra }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
            </div>

            <div>
                 <label for="#"><h4>Longitud: </h4></label>
                <strong><label>{{ $solicitudes->longitud }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <label for="#"><h4>Ancho: </h4></label>
                <strong><label>{{ $solicitudes->ancho }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <label for="#"><h4>Profundidad: </h4></label>
                <strong><label>{{ $solicitudes->profundidad }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
            </div>

            <div>
                 <label for="#"><h4>Diametro del colector: </h4></label>
                <strong><label>{{ $solicitudes->diametrocolector }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></strong>
                <label for="#"><h4>Diametro de tubo: </h4></label>
                <strong><label>{{ $solicitudes->diametrotubo }}</label></strong>
                
            </div>

            <div>
                 <label for="#"><h4>Observaciones: </h4></label>
                <strong><label>{{ $solicitudes->observacion }}</label></strong>
              
                
            </div>
            


            
                 
           
            @endforeach
            <div>
                <a class="btn btn-danger" href="{{ url('/solicitud') }}"> Regresar </a><br>
            </div>
        </div>

    </div>
@stop