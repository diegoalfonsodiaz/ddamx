@extends('admin.principal')

@section('header')
<h1>
        Tipos de obra
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Tipos de obra</li>
        
      </ol>
      
@stop
@section('contenido')

<div class="box-header">
@if(session()->has('flash'))
      <div class="col-md-6">
          <div class="alert alert-success" role="alert">
              {{ session('flash') }}
              <button type="button" class="close" data-dismiss="alert" alert-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        </div>
      @endif
              </div>

<div class="box box-primary">
            <div class="box-header">
            <a href="{{route('tipoobras.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear tipo de obra</a> 
              <h3 class="box-title">Listado Tipos de obras</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
                <table id="personas-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>Nombre</th>
                                <th>Estado</th>
                                
                              
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tipoobra as $tipoobras)
                            <tr>
                            <td>{{$tipoobras->nombre}}</td>
                             
                               
                                @if($tipoobras->estado==1)
                                <td ><p style="color:green;">Activo</p></td>
                              
                                @else
                                <td ><p style="color:red;">Inactivo</p></td>
                                @endif
                              <td>
                              </td>
                                
                               
                            </tr>
                            @endforeach
                        </tbody>
                    

                        
                </table>
            </div>
    </div>


@stop