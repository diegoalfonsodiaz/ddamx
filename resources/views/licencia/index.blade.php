@extends('admin.principal')
@section('header')
<h1>
        Licencia
        <small>Acontinuacion se presentan todas las Licencias para ser verificadas por la entidad</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Licencias</li>
        
      </ol>
      
@stop
@section('contenido')
<div class="box box-primary">
            <div class="box-header">
            
            <a href="{{route('licencia.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear Nueva Licencia</a> 
              <h3 class="box-title">Licencias</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
                <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                              
                                <th>No. de licencia</th>
                                <th>Inmueble</th>
                                <th>No. Recibo</th>  
                                <th>Fecha de autorización</th>
                                <th>Fecha de conexión</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($licencia as $licencias)
                            <tr>
                                
                                <td>{{$licencias->numerolicencia}}</td>
                                <td>{{$licencias->inmueble}}</td>
                                <td>{{$licencias->recibo}}</td>
                                <td>{{$licencias->fechaautorizacion}}</td>
                                <td>{{$licencias->fechaconexion}}</td>
                                <td>{{$licencias->estadolicencia}}</td>

                                
                                <td>
                                <form action="{{ route('licencia.destroy',$licencias->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('licencia.edit',$licencias->id) }}">Editar</a>
                
                                    @csrf
                                    @method('DELETE')
                                    
                                </form>
                                <form method="POST" 
                                    action="{{ route('licencias.pdf',$licencias->id) }}"
                                    style="display:inline">
                                    {{csrf_field()}} {{ method_field('DELETE')}}
                                    <button class="btn btn-xs btn-success" ><i class="fa fa-print"></i></button>
                                    </form>                                   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                </table>
            </div>
    </div>

@stop