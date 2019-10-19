@extends('front.base')

@section('contenido_front')
<div class="container">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresa tus datos personales:</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('solicitudexterna.store')}}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <strong >DPI</strong>
                  <input type="text" class="form-control input-lg" name="dpi"  readonly="readonly" value={{$dpi}} placeholder="DPI" required>
                </div>
                <div class="form-group">
                  <strong >Nombre</strong>
                  <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                  <strong >Apellidos</strong>
                  <input type="text" class="form-control input-lg" name="apellido" placeholder="Apellidos" required>
                </div>
                <div class="form-group">
                  <strong >Teléfono</strong>
                  <input type="text" class="form-control input-lg" name="telefono" placeholder="Teléfono" required >
                </div>
                <div class="form-group">
                  <strong >Correo electrónico</strong>
                  <input type="email" class="form-control input-lg " name="correo" placeholder="Correo electrónico">
                </div>
                <div class="box-header with-border">
                <h3 class="box-title">Ingresa los datos de la obra:</h3>
                </div>
                <div class="form-group">
                    <strong>Direccion Obra</strong>
                    <input type="text" name="direccionobra" class="form-control input-lg " placeholder="Direccion Obra">
                </div>

                <div class="form-group">
                    <strong>Codigo Inmueble (opcional) </strong>
                    <input type="text" name="codigoinmueble" class="form-control input-lg " placeholder="Codigo Inmueble">
                </div>

                <div class="form-group row">
                  <div class="col-md-6 offset-4">
                    {!! htmlFormSnippet() !!}
                    @error('g-recaptcha-response')
                        <span class="invalid-feedback" role="alert" style="display: block">
                            <strong>{{ $message}}</strong>
                        </span>
                    @enderror
                  </div>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
          </div>
          </div>

@stop

