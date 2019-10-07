@extends('admin.principal')
@section('header')
<h1>
        Solicitud factibilidad
        <small>Acontinuacion se presentan todas las solicitudes de factibilidad para ser verificadas por la entidad</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Solicitud de Factibilidad</li>
        
      </ol>
      
@stop
@section('contenido')
<div class="box box-primary">
            <div class="box-header">
            
            <a href="{{route('solicitud.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear Nueva Solicitud De Factibilidad</a> 
              <h3 class="box-title">Solicitudes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
                <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Inmueble</th>
                                <th>Expediente</th>
                                <th>E Interno</th>
                                <th>Fecha S</th>
                                <th>Ejecutor</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitud as $solicitudes)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{$solicitudes->persona}}</td>
                                <td>{{$solicitudes->direccionobra}}</td>
                                <td>{{$solicitudes->codigoinmueble}}</td>
                                <td>{{$solicitudes->expediente}}</td>
                                <td>{{$solicitudes->expedienteinterno}}</td>
                                <td>{{$solicitudes->fechasolicitud}}</td>
                                <td>{{$solicitudes->ejecutor}}</td>
                                <td>{{$solicitudes->estado}}</td>
                                
                                <td>
                                <form action="{{ route('solicitud.destroy',$solicitudes->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('solicitud.edit',$solicitudes->id) }}">Editar</a>
                
                                    @csrf
                                    @method('DELETE')
                                    
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                </table>
            </div>
    </div>

@stop