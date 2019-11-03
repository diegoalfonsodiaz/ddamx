@extends('admin.principal')

@section('header')
<h1>
        Reporte de personas
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">reportes</li>
        <li class="active">reporte de personsa</li>
      </ol>
@stop
@section('contenido')

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
              <table id="reportepersonas-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                            <th># </th>
                                 <th>DPI</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Teléfonos</th>
                                <th>Boleto de ornato</th>
                                <th>Correo</th>
                            
                                
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personas as $persona)
                            <tr>
                            <td>{{ ++$i }} </td>
                            <td>{{$persona->dpi}}</td>
                                <td>{{$persona->nombre}}</td>
                                <td>{{$persona->apellido}}</td>
                                <td>{{$persona->telefono}}</td>
                                <td>{{$persona->ornato}}</td>
                                <td>{{$persona->correo}}</td>
     
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