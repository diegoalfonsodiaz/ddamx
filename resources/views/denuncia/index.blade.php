@extends('admin.principal')
@section('header')
  <h1>
    Denuncias
    <small>Denuncias Públicas</small>
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Denuncias</li>
  </ol>
      
@stop
@section('contenido')
  <div class="box box-primary">
    <div class="box-header">        
      <a href="{{route('denuncia.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Nueva Denuncia</a> 
      <h3 class="box-title">Denuncia</h3>
    </div>
            <!-- /.box-header -->
    <div class="box-body">
            
        <table id="persona-table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                  <th>Descripción</th>
                  <th>Fecha</th>
                  <th>Fotografía</th>
                  <th>Estado Denuncia</th>
                  <th width="280px">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($denuncia as $den)
                    <tr>
                      <td>{{ $den->descripcion }}</td>
                      <td>{{ $den->fecha }}</td>
                      <td>
                      <div class="center">
                      <img style="width:150px;height:100px;" src="images/{{ $den->foto }}" class="card-img-top" alt="Este es la imagen">
                      </div>
                        
                      </td>
                      <td>{{ $den->estado }}</td> 

                      <td>
                        <a class="btn btn-primary" href="{{ route('denuncia.edit',$den->id) }}">Editar</a>
                         
                      </td>

                    </tr>
                @endforeach
            </tbody>

        </table>

    </div>
  </div>

@stop