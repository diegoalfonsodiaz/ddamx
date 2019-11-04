@extends('admin.principal')

@section('header')
<h1>
        Reporte de licencias por fecha
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">reportes</li>
        <li class="active">licencias por fecha</li>

      </ol>
@stop
@section('contenido')

<div class="row">
<form action="{{ route('reportelicencia.index') }}" method="PUT">
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
              <table id="reportelicencia-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                            <th># </th>
                                <th>No. de licencia</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Inmueble</th>
                                <th>No. Recibo</th>  
                                <th>Fecha de autorización</th>
                                <th>Fecha de conexión</th>
                                <th>Tipo de vía</th>
                                <th>Derecho</th>
                                <th>Remosión</th>
                                <th>Días de procesamiento</th>
                                <th>Estado</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($licencia as $licencias)
                            <tr>
                            <td>{{ ++$i }} </td>
                            <td>{{$licencias->numerolicencia}}</td>
                            <td>{{$licencias->nombre_persona}}</td>
                            <td>{{$licencias->apellido}}</td>
                            <td>{{$licencias->inmueble}}</td>
                            <td>{{$licencias->recibo}}</td>
                            <td>{{$licencias->fechaautorizacion}}</td>
                            <td>{{$licencias->fechaconexion}}</td>
                            <td>{{$licencias->tipovia}}</td>
                            <td>{{$licencias->derecho}}</td>
                            <td>{{$licencias->remocion}}</td>
                            <td>{{$licencias->monto}}</td>
                            <td>{{$licencias->estadolicencia}}</td>

                                
                
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