@extends('layouts/default')


@section('content')
<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
  
                <h2>
                    Solicitudes de factibilidad regi
                </h2>

            <br />
            <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-bordered width100" id="table">
                    <thead>
                            <tr>
                            
                                <th>Solicitud No.</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>DPI</th>
                                <th>Fecha de solicitud</th>
                                <th>Dirección de la obra</th>
                                <th>Inmueble</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitud as $solicitudes)
                            <tr>
                                <td>{{$solicitudes->id}}</td>
                                <td>{{$solicitudes->nombre}}</td>
                                <td>{{$solicitudes->apellido}}</td>
                                <td>{{$solicitudes->dpi}}</td>
                                <td>{{$solicitudes->fechasolicitud}}</td>
                                <td>{{$solicitudes->direccionobra}}</td>
                                <td>{{$solicitudes->codigoinmueble}}</td>
                                <td>{{$solicitudes->nombre_estadofactibilidad}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>

@stop