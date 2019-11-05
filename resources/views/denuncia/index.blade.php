@extends('admin.principal')
@section('header')
  <h1>
    Denuncias
    
  </h1>

  <ol class="breadcrumb">
    <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Denuncias</li>
  </ol>
      
@stop
@section('contenido')
<div class="box-header">
    @if(session('info'))
      <div class="col-md-6">
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
            <button type="button" class="close" data-dismiss="alert" alert-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      </div>
    @endif
</div>


  <div class="box box-primary">
    <div class="box-header">        
      <a href="{{route('denuncia.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Nueva denuncia</a> 
      <h3 class="box-title">Listado de las denuncia</h3>
    </div>
            <!-- /.box-header -->
    <div class="box-body">
            
        <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th width="50px"># </th>
                  <th width="400px">Descripción</th>
                  <th width="120px">Fecha</th>
                  <th width="220px">Fotografía</th>
                  <th width="220px">Dirección</th>
                  <th width="150px">Teléfono</th>
                  <th width="200px">Estado de denuncias</th>
                  <th width="125px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($denuncia as $den)
                    <tr>
                      <td>{{ ++$i }} </td>
                      <td><h5>{{ $den->descripcion }}</h5></td>
                      <td>{{ $den->fecha }}</td>
                      <td>
                      <div class="center">
                      <img style="width:150px;height:100px;" src="images/{{ $den->foto }}" class="card-img-top" alt="Imagen no encontrada">
                      <a target="_blank" href="images/{{ $den->foto }}">Abrir</a>
                      </div>
                      </td>
                      <td>{{ $den->direccion }}</td>
                      <td>{{ $den->telefono }}</td>
                      
                      @if($den->es==1)
                        <td ><p style="color:green;"> {{ $den->estado }} </p></td>
                    
                      @else
                        <td ><p style="color:red;">El estado: {{ $den->estado }}, está Deshabilitado</p></td>
                      @endif


                      <td>
                      @if( $den->estadodenuncia == 1 )
                        <a href="{{ route('denuncia.edit',$den->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                      @elseif( $den->estadodenuncia == 2 )
                        <a href="{{ route('denuncia.edit',$den->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                      @endif
                        <a class="btn btn-xs btn-success" href="{{ route('ticketdenuncia.index', $den->id) }}"> <i class="fa fa-long-arrow-right"></i></a>
                      </td>

                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
  </div>

@stop