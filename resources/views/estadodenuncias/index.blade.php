@extends('admin.principal')

@section('header')
<h1>
        Estados de denuncias
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Mantenimiento</li>
        <li class="active">Estados de denuncias</li>
        
      </ol>
      
@stop
@section('contenido')

<div class="box-header">
    @if(session('flash'))
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
            
            <a href="{{route('estadodenuncias.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Crear estado de denuncias</a> 
              <h3 class="box-title">Listado de estados de denuncias</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
                <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($estadodenuncias as $estadodenuncia)
                            <tr>
                            
                                <td>{{$estadodenuncia->descripcion}}</td>
                                
                                @if($estadodenuncia->estado==1)
                                <td ><p style="color:green;">Activo</p></td>
                              
                                @else
                                <td ><p style="color:red;">Inactivo</p></td>
                                @endif
                              
                                
                                <td>
                                    <a href="{{route('estadodenuncias.edit', $estadodenuncia)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                    
                                    @if($estadodenuncia->estado==1)
                                    <form method="POST" 
                                    action="{{route('estadodenuncias.desactivar', $estadodenuncia)}}"
                                    style="display:inline">
                                    {{csrf_field()}} {{ method_field('POST')}}
                                    <button class="btn btn-xs btn-danger" ><i class="fa fa-remove"></i></button>
                                    </form>
                              
                                @else
                                <form method="POST" 
                                    action="{{route('estadodenuncias.activar', $estadodenuncia)}}"
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