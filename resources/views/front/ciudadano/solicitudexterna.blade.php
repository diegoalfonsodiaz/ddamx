@extends('front.base')

@section('contenido_front')
<div class="container">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ingresa tus datos personales</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('solicitudexterna.store')}}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label >DPI</label>
                  <input type="text" class="form-control input-lg" name="dpi" placeholder="DPI" required>
                </div>
                <div class="form-group">
                  <label >Nombre</label>
                  <input type="text" class="form-control input-lg" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                  <label >Apellidos</label>
                  <input type="text" class="form-control input-lg" name="apellido" placeholder="Apellidos" required>
                </div>
                <div class="form-group">
                  <label >Teléfono</label>
                  <input type="text" class="form-control input-lg" name="telefono" placeholder="Teléfono" required >
                </div>
                <div class="form-group">
                  <label >Correo electrónico</label>
                  <input type="email" class="form-control input-lg " name="correo" placeholder="Correo electrónico">
                </div>
                
                <div class="form-group">
                    <strong>Direccion Obra</strong>
                    <input type="text" name="direccionobra" class="form-control" placeholder="Direccion Obra">
                </div>

                <div class="form-group">
                    <strong>Codigo Inmueble</strong>
                    <input type="text" name="codigoinmueble" class="form-control" placeholder="Codigo Inmueble">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    {!! htmlFormSnippet() !!}
                    @error('g-recaptcha-response')
                        <span class="invalid-feedback" role="alert" style="display: block">
                            <strong>{{ $message}}</strong>
                        </span>
                    @enderror
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

