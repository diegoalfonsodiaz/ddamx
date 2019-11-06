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
     
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('personas.update', $persona)}}">
            {{csrf_field()}} {{ method_field('PUT')}}
              <div class="box-body">
                <div class="form-group {{ $errors->has('dpi') ? 'has-error': ''}}">
                  <label >DPI</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="dpi" placeholder="DPI" value="{{old('dpi',$persona->dpi)}}">
                  {!! $errors->first('dpi',' <span class="help-block">Verifique su DPI</span>')!!}                  

                </div>
                <div class="form-group {{ $errors->has('nombre') ? 'has-error': ''}}">
                  <label >Nombres</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="nombre" placeholder="Nombres" value="{{old('nombre',$persona->nombre)}}">
                  {!! $errors->first('nombre',' <span class="help-block">Verifique sus datos</span>')!!}
                </div>
                <div class="form-group {{ $errors->has('apellido') ? 'has-error': ''}}">
                  <label >Apellidos</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="apellido" placeholder="Apellidos" value="{{old('apellido',$persona->apellido)}}">
                  {!! $errors->first('apellido',' <span class="help-block">Verifique sus datos</span>')!!}
                </div>
                <div class="form-group {{ $errors->has('telefono') ? 'has-error': ''}}">
                  <label >Teléfono</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="telefono" value="{{old('telefono',$persona->telefono)}}" placeholder="Teléfono">
                  {!! $errors->first('telefono',' <span class="help-block">Verifique sus datos</span>')!!}
                </div>
                <div class="form-group {{ $errors->has('ornato') ? 'has-error': ''}}">
                  <label >Boleto de ornato</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="Boleto de ornato" value="{{old('ornato',$persona->ornato)}}" placeholder="Ornato">
                  {!! $errors->first('ornato',' <span class="help-block">Verifique sus datos</span>')!!}
                </div>
                <div class="form-group {{ $errors->has('correo') ? 'has-error': ''}}">
                  <label >Correo electrónico</label>
                  <input type="email" autocomplete="off" class="form-control input-lg " name="correo" value="{{old('correo',$persona->correo)}}" placeholder="Correo electrónico">
                  {!! $errors->first('correo',' <span class="help-block">Verifique sus datos</span>')!!}
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button> 
                    <a href="{{route('personas.index')}}" class="btn btn-danger pull-right"> Regresar</a> 
                </div>
            </form>
          </div>
@stop