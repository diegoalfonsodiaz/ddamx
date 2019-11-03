@extends('admin.principal')

@section('header')
<h1>
        Reporte de denuncias por fecha
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">reportes</li>
        <li class="active">denuncias por fecha</li>

      </ol>
@stop
@section('contenido')

<div class="row">
<form action="{{route('reportedenuncias.index')}}" method="PUT">
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
              <table id="reportedenuncias-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                              
                            <th width="50px"># </th>
                  <th width="400px">Descripción</th>
                  <th width="120px">Fecha</th>
              
                  <th width="220px">Dirección</th>
                  <th width="220px">Teléfono</th>
                  <th width="125px">Estado Denuncia</th>
                
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($denuncia as $denuncias)
                            <tr>
                            <td>{{ ++$i }} </td>
                            <td>{{$denuncias->descripcion}}</td>
                            <td>{{$denuncias->fecha}}</td>
                       
                            <td>{{$denuncias->direccion}}</td>
                            <td>{{$denuncias->telefono}}</td>
                            <td>{{$denuncias->estado}}</td>
                            

                                
                
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