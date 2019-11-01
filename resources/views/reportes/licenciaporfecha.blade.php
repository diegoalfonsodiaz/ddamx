@extends('admin.principal')

@section('header')
<h1>
        Reporte de licencias
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Personas</li>
      </ol>
@stop
@section('contenido')

<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
                <div class="box-body">
                       <!-- personas -->
                        <div class="form-group" >
                            <label for="direccion_fab">Fecha de autorización</label>
                            <input type="date" name="fechaautorizacion" class="form-control"  >

                           
                        </div>
                </div>
           
        </div>
    </div>
    <div class="col-md-6">
        <div class="box box-primary">
        
            <div class="box-body">
           <div class="form-group" >
                            <label for="direccion_fab">Fecha de autorización</label>
                            <input type="date" name="fechaautorizacion" class="form-control"  >

                           
                        </div>
            </div>
        </div>
    </div>
    
  

</div>

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
                            
                              
                                <th>No. de licencia</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Inmueble</th>
                                <th>No. Recibo</th>  
                                <th>Fecha de autorización</th>
                                <th>Fecha de conexión</th>
                                <th>Estado</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($licencia as $licencias)
                            <tr>
                            <td>{{$licencias->numerolicencia}}</td>
                            <td>{{$licencias->nombre_persona}}</td>
                            <td>{{$licencias->apellido}}</td>
                            <td>{{$licencias->inmueble}}</td>
                            <td>{{$licencias->recibo}}</td>
                            <td>{{$licencias->fechaautorizacion}}</td>
                            <td>{{$licencias->fechaconexion}}</td>
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