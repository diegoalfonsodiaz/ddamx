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
                  <th width="50px"># </th>
                  <th width="400px">Descripción</th>
                  <th width="120px">Fecha</th>
                  <th width="220px">Fotografía</th>
                  <th width="125px">Estado Denuncia</th>
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
                      <img style="width:150px;height:100px;" src="images/{{ $den->foto }}" class="card-img-top" alt="Este es la imagen">
                      <a target="_blank" href="images/{{ $den->foto }}">Abrir Foto</a>
                      </div>
                      </td>
                      
                      @if($den->es==1)
                        <td ><p style="color:green;"> {{ $den->estado }} </p></td>
                    
                      @else
                        <td ><p style="color:red;">El estado: {{ $den->estado }}, está Deshabilitado</p></td>
                      @endif


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