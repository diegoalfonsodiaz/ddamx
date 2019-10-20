@extends('front.base')
@section('header')
<h1>
        Solicitud factibilidad
        </h1>

      
@stop
@section('contenido_front')
<div class="box-header">
            
<div class="box box-primary">
            <div class="box-header">
            
              <h3 class="box-title">Solicitudes de factibilidad registradas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
                <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
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

@stop