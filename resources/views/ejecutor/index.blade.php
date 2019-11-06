@extends('admin.principal')
@section('header')
<h1>
        Ejecutores
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">ejecutores</li>
        
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
            @if (auth()->user()->hasRole(['admin']))
            <a href="{{route('ejecutor.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear ejecutor</a> 
                @elseif(auth()->user()->hasRole(['jefeoperaciones']))
                <a href="{{route('ejecutor.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear ejecutor</a>  
                @elseif(auth()->user()->hasRole(['operaciones']))
                <a href="{{route('ejecutor.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear ejecutor</a> 
            @endif
             
            

              <h3 class="box-title">Listado de Ejecutores</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

      <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
            <th># </th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Boleto de ornato</th>
            <th>Cargo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        </thead>
        
        <tbody>
        @foreach ($ejecutor as $ejecutors)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ejecutors->nombre }}</td>
            <td>{{ $ejecutors->direccion }}</td>
            <td>{{ $ejecutors->ornato }}</td>
            <td>{{ $ejecutors->cargo }}</td>
            
                                @if($ejecutors->estado==1)
                                <td ><p style="color:green;">Activo</p></td>
                              
                                @else
                                <td ><p style="color:red;">Inactivo</p></td>
                                @endif
                              
                                
                                <td>
                                    <a href="{{route('ejecutor.edit', $ejecutors->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                    
                                   
                                    @if($ejecutors->estado==1)
                                    <form method="POST" 
                                    action="{{route('ejecutor.desactivar', $ejecutors->id)}}"
                                    style="display:inline">
                                    {{csrf_field()}} {{ method_field('POST')}}
                                    <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                                    </form>
                              
                                @else
                                <form method="POST" 
                                    action="{{route('ejecutor.activar', $ejecutors->id)}}"
                                    style="display:inline">
                                    {{csrf_field()}} {{ method_field('DELETE')}}
                                    <button class="btn btn-xs btn-success" ><i class="fa fa-check"></i></button>
                                    </form>
                              
                                @endif
            
                    </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</div>
            
@stop