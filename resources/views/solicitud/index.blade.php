@extends('admin.principal')
@section('header')
<h1>
        Solicitudes de factibilidad
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Solicitudes de Factibilidad</li>
        
      </ol>
      
@stop
@section('contenido')
<div class="box-header">
  @if(session()->has('flash'))
    <div class="col-md-6">
      <div class="alert alert-success" role="alert">
      {{session('flash')}}
      <button type="button" class="close" data-dismiss="alert" alert-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    </div>
  @endif
</div>


<div class="box box-primary">
            <div class="box-header">
            
            <a href="{{route('solicitud.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear solicitud de factibilidad</a> 
              <h3 class="box-title">Listado de solicitudes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
                <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                               
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>DPI</th>
                                <th>Dirección de la obra</th>
                                <th>Fecha de solicitud</th>
                                <th>Número de inmueble</th>
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

                                @if($solicitudes->estadofactibilidad_id==2)
                                <form method="POST" 
                                    action="#"
                                    style="display:inline">
                                    {{csrf_field()}}
                                    <a class="btn btn-xs btn-success"href="{{ route('solicitudes.pdf', $solicitudes->id) }}" ><i class="fa fa-print"></i></a>
                                    </form>
                                  @endif
                                  <form method="POST" 
                                    action="#"
                                    style="display:inline">
                                    {{csrf_field()}} @method('DELETE')
                                    <a class="btn btn-xs btn-danger" href="{{ route('solicitudes.historial', $solicitudes->id) }}" ><i class="fa fa-archive"></i></a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                </table>
            </div>
    </div>

@stop