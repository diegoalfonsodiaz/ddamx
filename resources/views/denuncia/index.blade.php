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
                  <th>Dirección y descripcion de la denuncia</th>
                  <th >Fecha</th>
                  <th width="220px">Fotografía</th>
                  <th>Nombre del contacto</th>
                  <th >Teléfono</th>
                  <th >Estado de denuncias</th>
                  <th >Acciones</th>
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
                        <a href="{{ route('denuncia.edit',$den->id) }}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-xs btn-success" href="{{ route('ticketdenuncia.index', $den->id) }}"> <i class="fa fa-long-arrow-right"></i></a>
                      </td>

                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
  </div>

@stop