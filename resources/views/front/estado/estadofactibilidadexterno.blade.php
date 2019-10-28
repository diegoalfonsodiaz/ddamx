@extends('layouts/default')


@section('content')
<!-- Main content -->
<section class="content paddingleft_right15">
 <h2>
                    Solicitudes de factibilidad registradas
                </h2>
    <div class="row">
        <div class="panel panel-primary ">
  

            <br />
            <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-bordered width100" id="table">
                    <thead>
                            <tr>
                            
                                <th>Solicitud No.</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>DPI</th>
                                <th>Fecha de solicitud</th>
                                <th>Dirección de la obra</th>
                                <th>Inmueble</th>
                                <th>Estado factibilidad</th>                         
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
                                <td style="color:#0e70cc;"><b>{{$solicitudes->nombre_estadofactibilidad}}</b></td>
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