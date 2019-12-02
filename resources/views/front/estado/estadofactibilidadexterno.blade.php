@extends('layouts/default')


@section('content')
<!-- Main content -->
<div class="container">
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
                                <th>Fecha de solicitud</th>
                                <th>Dirección de la obra</th>
                                <!-- <th>Inmueble</th> -->
                                <th>Estado factibilidad</th> 
                                <th>Fecha de actualizacion de estado</th>                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitud as $solicitudes)
                            <tr>
                                <td>{{$solicitudes->id}}</td>
                                <td>{{$solicitudes->fechasolicitud}}</td>
                                <td>{{$solicitudes->direccionobra}}</td>
                                <!-- <td>{{$solicitudes->codigoinmueble}}</td> -->
                                <td style="color:#0e70cc;"><b>{{$solicitudes->nombre_estadofactibilidad}}</b></td>
                                <td>{{$solicitudes->updated_at}}
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                <div class="panel-body">
                <div class="table-responsive">
                 @if(Session::has('mensajeestado'))
                    <strong style=" font-size:25px; color: blue;">{{Session::get('mensajeestado')}}</strong>
                @endif
                  <label></label>
                <div class="table-responsive">
                 @if(Session::has('mensaje1'))
                    <stron style=" font-size:20px; color: black;">{{Session::get('mensaje1')}}</stron>
                @endif
                </div>
                <div class="table-responsive">
                 @if(Session::has('mensaje2'))
                    <div style=" font-size:15px; color: black;"><span> -</span>{{Session::get('mensaje2')}}</div>
                @endif
                </div>
                <div class="table-responsive">
                 @if(Session::has('mensaje3'))
                    <div style=" font-size:15px; color: black;"><span> -</span>{{Session::get('mensaje3')}}</div>
                @endif
                </div>

                <label></label>
                <div class="table-responsive">
                 @if(Session::has('mensaje4'))
                    <stron style=" font-size:20px; color: black;">{{Session::get('mensaje4')}}</stron>
                @endif
                </div>
                <div class="table-responsive">
                 @if(Session::has('mensaje5'))
                    <div style=" font-size:15px; color: black;"><span> </span>{{Session::get('mensaje5')}}</div>
                @endif
                </div>
                <div class="table-responsive">
                 @if(Session::has('mensaje6'))
                    <div style=" font-size:15px; color: black;"><span> </span>{{Session::get('mensaje6')}}</div>
                @endif
                <div class="table-responsive">
                 @if(Session::has('mensaje7'))
                    <div style=" font-size:15px; color: black;">{{Session::get('mensaje7')}}</div>
                @endif
                </div>
                <div class="table-responsive">
                 @if(Session::has('mensaje8'))
                    <div style=" font-size:15px; color: black;"><span> </span>{{Session::get('mensaje8')}}</div>
                @endif
                </div>
                <label></label>
                <div class="table-responsive">
                 @if(Session::has('mensaje9'))
                    <stron style=" font-size:20px; color: black;">{{Session::get('mensaje9')}}</stron>
                @endif
                </div>
                <div class="table-responsive">
                 @if(Session::has('mensaje10'))
                    <div style=" font-size:15px; color: black;"><span> </span>{{Session::get('mensaje10')}}</div>
                @endif
                </div>
                <div class="table-responsive">
                 @if(Session::has('mensaje11'))
                    <div style=" font-size:15px; color: black;"><span> </span>{{Session::get('mensaje11')}}</div>
                @endif
                </div>
                <br> </br>
            </div>
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>
</div> 
@stop