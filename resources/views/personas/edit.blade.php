@extends('admin.principal')

@section('header')
<h1>
        Editar persona
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="/menu"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Personas</li>
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
            <form role="form" method="POST" action="{{route('personas.update', $persona)}}">
            {{csrf_field()}} {{ method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label >DPI</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="dpi" placeholder="DPI" value="{{old('dpi',$persona->dpi)}}" required>
                  
                </div>
                <div class="form-group">
                  <label >Nombres</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="nombre" placeholder="Nombres" value="{{old('nombre',$persona->nombre)}}" required>
                </div>
                <div class="form-group">
                  <label >Apellidos</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="apellido" placeholder="Apellidos" value="{{old('apellido',$persona->apellido)}}" required>
                </div>
                <div class="form-group">
                  <label >Teléfono</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="telefono" value="{{old('telefono',$persona->telefono)}}" placeholder="Teléfono" required>
                </div>
                <div class="form-group">
                  <label >Boleto de ornato</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="Boleto de ornato" value="{{old('ornato',$persona->ornato)}}" placeholder="Ornato">
                </div>
                <div class="form-group">
                  <label >Correo electrónico</label>
                  <input type="email" autocomplete="off" class="form-control input-lg " name="correo" value="{{old('correo',$persona->correo)}}" placeholder="Correo electrónico">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Aceptar</button> 
                    <a href="{{route('personas.index')}}" class="btn btn-danger pull-right"> Regresar</a> 
                </div>
            </form>
          </div>
@stop