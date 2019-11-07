@extends('admin.principal')

@section('header')
<h1>
        Reporte de solicitudes por fecha
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">reportes</li>
        <li class="active">solicitudes por fecha</li>
      </ol>
@stop
@section('contenido')

<div class="row">
<form action="{{route('reportesolicitud.index')}}" method="PUT">
            {!! csrf_field() !!}  @method('DELETE')
    <div class="col-md-6">
        <div class="box box-primary">
                <div class="box-body">
                       <!-- personas -->
                        <div class="form-group" >
                            <label for="direccion_fab">De:</label>
                            <input type="date" name="fechaautorizacion1" value="{{ $fecha1}}" class="form-control"  >

                           
                        </div>
                </div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
        
            <div class="box-body">
           <div class="form-group" >
                            <label for="direccion_fab">Hasta:</label>
                            <input type="date" name="fechaautorizacion2" value="{{$fecha2}}" class="form-control"  >

                           
                        </div>
            </div>
        </div>
  
    </div>
    <div class="form-group">
                                <button class="btn btn-primary center-block">Aceptar </button>
                         </div>
    
    


</div>
</form>
<div class="box box-primary">
            <div class="box-header with-border">
            @if(count($errors)>0)
          @foreach($errors->all() as $error)
            <div class="alert alert-danger"> 
              {{ $error }}
            </div>
          @endforeach
        @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
           
              <div class="box-body">
              <table id="reportesolicitud-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                            <th># </th>
                                <th>Propietario</th>
                                <th>Apellidos </th>
                                <th>Dirección de la obra</th>
                                <th>Inmueble</th>
                                <th>No. de expediente</th>  
                                <th>No. de expediente interno</th>
                                <th >Fecha de solicitud</th>
                                <th hidden= "true">Tipo de obra</th>
                                <th hidden= "true">No. de finca</th>
                                <th hidden= "true">No. de folio</th>
                                <th hidden= "true">Libro</th>
                                <th hidden= "true">No. de catastral</th>
                                <th hidden= "true">Solvencia municipal</th>
                                <th hidden= "true">Observación</th>
                                <th hidden= "true">Longitud</th>
                                <th hidden= "true">Ancho</th>
                                <th hidden= "true">Profundidad</th>
                                <th hidden= "true">D. del tubo</th>
                                <th hidden= "true">D. del colector</th>
                                <th hidden= "true">Ejecutor</th>
                                <th >Estado de factibilidad</th>

                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitud as $solicitudes)
                            <tr>
                            <td>{{ ++$i }} </td>
                            <td >{{$solicitudes->nombre_persona}}</td>
                            <td>{{$solicitudes->apellido}}</td>
                            <td>{{$solicitudes->direccionobra}}</td>
                            <td>{{$solicitudes->codigoinmueble}}</td>
                            <td>{{$solicitudes->expediente}}</td>
                            <td>{{$solicitudes->expedienteinterno}}</td>
                            <td>{{$solicitudes->fechasolicitud}}</td>
                            <td hidden= "true">{{$solicitudes->nombre_tipoobra}}</td>
                            <td hidden= "true">{{$solicitudes->numerofinca}}</td>
                            <td hidden= "true">{{$solicitudes->numerofolio}}</td>
                            <td hidden= "true">{{$solicitudes->libro}}</td>
                            <td hidden= "true">{{$solicitudes->codigoinmueble}}</td>
                            <td hidden= "true">{{$solicitudes->solvenciamunicipal}}</td>
                            <td hidden= "true">{{$solicitudes->observacion}}</td>
                            <td hidden= "true">{{$solicitudes->longitud}}</td>
                            <td hidden= "true">{{$solicitudes->ancho}}</td>
                            <td hidden= "true">{{$solicitudes->profundidad}}</td>
                            <td hidden= "true">{{$solicitudes->diametrotubo}}</td>
                            <td hidden= "true">{{$solicitudes->diametrocolector}}</td>
                            <td hidden= "true">{{$solicitudes->nombre_ejecutor}}</td>
                            <td>{{$solicitudes->nombre_estadofactibilidad}}</td>



                                
                
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                </table>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                   <!-- <button type="submit" class="btn btn-primary">Aceptar</button>
                    <a href="{{route('personas.index')}}" class="btn btn-danger pull-right"> Regresar</a>--> 
                </div>
        
          </div>



@stop