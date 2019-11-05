@extends('admin.principal')

@section('header')
<h1>
        Crear persona
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/menu') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Personas</li>
      </ol>
@stop
@section('contenido')
<div class="box box-primary">
            <div class="box-header with-border">
           
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('personas.store')}}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group {{ $errors->has('dpi') ? 'has-error': ''}}">
                  <label >DPI</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="dpi" value="{{ old('dpi')}}" placeholder="DPI" >
                  {!! $errors->first('dpi',' <span class="help-block">Verifique su DPI</span>')!!}

                </div>
                <div class="form-group {{ $errors->has('nombre') ? 'has-error': ''}}">
                  <label >Nombres</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="nombre" value="{{ old('nombre')}}" placeholder="Nombres" >
                  {!! $errors->first('nombre',' <span class="help-block">Verifique sus datos</span>')!!}

                </div>
                <div class="form-group {{ $errors->has('apellido') ? 'has-error': ''}}">
                  <label >Apellidos</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="apellido" value="{{ old('apellido')}}" placeholder="Apellidos" >
                  {!! $errors->first('apellido',' <span class="help-block">Verifique sus datos</span>')!!}

                </div>
                <div class="form-group {{ $errors->has('telefono') ? 'has-error': ''}}">
                  <label >Teléfono</label><label style="color:red;">*</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="telefono" value="{{ old('telefono')}}" placeholder="Teléfono"  >
                  {!! $errors->first('telefono',' <span class="help-block">Verifique sus datos</span>')!!}

                </div>
                <div class="form-group {{ $errors->has('ornato') ? 'has-error': ''}}">
                  <label >Boleto de ornato</label>
                  <input type="text" autocomplete="off" class="form-control input-lg" name="ornato" value="{{ old('ornato')}}" placeholder="Boleto de ornato">
                  {!! $errors->first('ornato',' <span class="help-block">Verifique sus datos</span>')!!}

                </div>
                <div class="form-group {{ $errors->has('correo') ? 'has-error': ''}}">
                  <label >Correo electrónico</label>
                  <input type="email" autocomplete="off" class="form-control input-lg " name="correo" value="{{ old('correo')}}" placeholder="Correo electrónico">
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