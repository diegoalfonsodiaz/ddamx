@extends('admin.principal')
@section('header')
<h1>
        Solicitud factibilidad
        <small>A continuación se presentan todas las solicitudes de factibilidad para ser verificadas por la entidad</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Solicitud de Factibilidad</li>
        
      </ol>
      
@stop
@section('contenido')
<div class="box-header">
            @if(session()->has('flash'))
              <div class="col-md-6">
                <div class="alert alert-success">{{session('flash')}}
                </div>
              </div>
              @endif</div>
<div class="box box-primary">
            <div class="box-header">
            
            <a href="{{route('solicitud.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear solicitud de factibilidad</a> 
              <h3 class="box-title">Solicitudes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
                <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                               
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>DPI</th>
                                <th>Dirección de la obra</th>
                                <th>Fecha de solicitud</th>
                                <th>Inmueble</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitud as $solicitudes)
                            <tr>
                              <!--  <td>{{ ++$i }}</td>-->
                                <td>{{$solicitudes->nombre_persona}}</td>
                                <td>{{$solicitudes->apellido}}</td>
                                <td>{{$solicitudes->dpi}}</td>
                                <td>{{$solicitudes->direccionobra}}</td>
                                <td>{{$solicitudes->fechasolicitud}}</td>
                                <td>{{$solicitudes->codigoinmueble}}</td>
                                <td>{{$solicitudes->nombre_estadofactibilidad}}</td>
                                
                                <td>
                                <form action="{{ route('solicitud.destroy',$solicitudes->id) }}" method="POST" style="display:inline">
                                    <a class="btn btn-xs btn-info" href="{{ route('solicitud.edit',$solicitudes->id) }}"><i class="fa fa-pencil"></i></a>
                
                                    @csrf
                                    @method('DELETE')
                                    
                                </form>
                                <a class="btn btn-xs btn-warning" href="{{ route('solicitudes.show',$solicitudes->id) }}"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                </table>
            </div>
    </div>

@stop