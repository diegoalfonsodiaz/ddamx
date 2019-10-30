@extends('admin.principal')

@section('header')
<h1>
        Personas
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">personas</li>
        
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
            
            <a href="{{route('personas.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear persona</a> 
              <h3 class="box-title">Listado de personas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
                <table id="persona-table" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                         
                                <th>DPI</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Teléfonos</th>
                                <th>Boleto de ornato</th>
                                <th>Correo</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personas as $persona)
                            <tr>
                           
                                <td>{{$persona->dpi}}</td>
                                <td>{{$persona->nombre}}</td>
                                <td>{{$persona->apellido}}</td>
                                <td>{{$persona->telefono}}</td>
                                <td>{{$persona->ornato}}</td>
                                <td>{{$persona->correo}}</td>
                                @if($persona->estado==1)
                                <td ><p style="color:green;">Activo</p></td>
                              
                                @else
                                <td ><p style="color:red;">Inactivo</p></td>
                                @endif
                              
                                
                                <td>
                                    <a href="{{route('personas.edit', $persona)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                    
                                   
                                    @if($persona->estado==1)
                                    <form method="POST" 
                                    action="{{route('personas.desactivar', $persona)}}"
                                    style="display:inline">
                                    {{csrf_field()}} {{ method_field('POST')}}
                                    <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                                    </form>
                              
                                @else
                                <form method="POST" 
                                    action="{{route('personas.activar', $persona)}}"
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