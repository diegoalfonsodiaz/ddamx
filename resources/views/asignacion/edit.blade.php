@extends('admin.principal')

@section('header')
  <h1> Editar Asignación </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active">Asignación</li>
  </ol>
@stop

@section('contenido')
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
        <form action="{{ route('asignacion.update', $asignacion->id) }}" method="POST">
      
        {{ csrf_field() }}
        @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="user_id">Usuario</label>
                    <select class="form-control input-lg" name="user_id" id="user_id" class="form-control selectpicker" data-live-search="true">
                        @foreach($usuario as $u)
                        @if ($u->id==$asignacion->id)
                            <option value="{{$u->id}}" selected>{{$u->name}}</option>
                            @else
                            <option value="{{$u->id}}">{{$u->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label for="role_id">Rol</label>
                    <select class="form-control input-lg" name="role_id" id="role_id" class="form-control selectpicker" data-live-search="true">
                        @foreach($rol as $r)
                        @if ($r->id==$asignacion->id)
                            <option value="{{$u->id}}" selected>{{$r->nombre}}</option>
                            @else
                            <option value="{{$r->id}}">{{$r->nombre}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            
          <!-- /.box-body -->

            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger pull-right" href="{{ url('/asignacion') }}"> Regresar </a> 
            </div>
        </form>
  </div>
@stop