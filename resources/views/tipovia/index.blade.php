@extends('admin.principal')
@section('contenido')

<div class="box box-primary">
  <div class="box-header with-border">
    <h1>Listado Tipo Vías</h1>
    <a class="btn btn-primary" href="{{ url('/agregartipovia') }}" type="button">Nuevo</a>
    
    @if(session('info'))
    <div class="alert alert-success" role="alert">
        {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" alert-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <table class="table table-bordered table-hover ">
      <thead>
          <tr>
          <th scope="col" width="250px">Nombre</th>
          <th scope="col" width="450px">Descripcion</th>
          <th scope="col" width="200px">Estado</th>
          <th scope="col" width="200px">Acciones</th>
          </tr>
      </thead>
    
      <tbody>

        @if(count($tipovias)>0)
          @foreach($tipovias->all() as $tpv)
            <tr>

              <td>{{ $tpv->nombre }}</td>
              <td>{{ $tpv->descripcion }}</td>
              
              <td>
                @if($tpv->estado == 1)
                  <!--<a class="badge badge-danger">Activado</a>-->
                  <a class="label label-success">Activo</a>        
                @endif
                
                @if($tpv->estado == 0)
                  <a class="label label-danger">Desactivado</a>
                @endif
              </td>

              <td>
                <!-- <a class="badge badge-warning" href='{{ url("/eliminartipovia/{$tpv->id}") }}'> Eliminar </a>  -->

                <a class="btn btn-warning" href='{{ url("/actualizartipovia/{$tpv->id}") }}' class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
                
                @if($tpv->estado == 1)
                  <a class="btn btn-danger" href='{{ url("/desactivartipovia/{$tpv->id}") }}' type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
                @endif
                
                @if($tpv->estado == 0)
                <a class="btn btn-primary" href='{{ url("/activartipovia/{$tpv->id}") }}' type="button" class="btn btn-default btn-sm">
                  <span class="glyphicon glyphicon-ok-circle"></span>
                </a>
                @endif
              </td>

            </tr>
          @endforeach
        @endif

      </tbody>
    </table>
  </div>
</div>
@stop 