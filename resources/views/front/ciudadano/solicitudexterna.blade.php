@extends('layouts/default')


{{-- Page content --}}
@section('content')

    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2>Tus datos personales:</h2>

                <form role="form" method="POST" action="{{route('solicitudexterna.store')}}">
                {{csrf_field()}}  {{ method_field('PUT')}} 

                      <div class="box-body">
                @foreach($personas as $persona)
                <div class="form-group">
                  <strong >DPI</strong>
                  <input type="text" name="dpi" class="form-control" readonly="readonly" value={{$persona->dpi}}>
                </div>
                <div class="form-group">
                  <strong >Nombres</strong>
                  <input type="text"  name="nombre" class="form-control" readonly="readonly" value={{$persona->nombre}}>
                </div>
                <div class="form-group">
                  <strong >Apellidos</strong>
                  <input type="text" name="apellido" class="form-control" readonly="readonly" value={{$persona->apellido}}>
                </div>
                <div class="form-group">
                  <strong >Ornato</strong>
                  <input type="text" name="ornato" class="form-control" readonly="readonly" value={{$persona->ornato}}>
                </div>
                <div class="form-group">
                  <strong >Teléfono</strong>
                  <input type="text" name="telefono" class="form-control" readonly="readonly" value={{$persona->telefono}}>
                </div>
                <div class="form-group">
                  <strong >Correo electrónico</strong>
                  <input type="email" name="correo" class="form-control" readonly="readonly"  value={{$persona->correo}} "No registrado">
                </div>
                 @endforeach
                <div class="box-header with-border">
                <h3 class="box-title">Ingresa los datos de la obra:</h3>
                </div>
                <label><span style="color:red">* </span><span style="color:black">Campos obligatorios</span></label>
                <div class="form-group">
                    <strong>Dirección Obra<span style="color:red"> *</span></strong>
                    <input type="text" name="direccionobra" class="form-control input-lg " placeholder="Dirección Obra">
                </div>

                <div class="form-group">
                    <strong>Código de inmueble</strong>
                    <input type="text" name="codigoinmueble" class="form-control input-lg " placeholder="Código del  inmueble">
                </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    {!! htmlFormSnippet() !!}
                    @error('g-recaptcha-response')
                        <span class="invalid-feedback" role="alert" style="display: block">
                            <strong>{{ $message}}</strong>
                        </span>
                    @enderror
                    </div> 

                    <label></label>

                    </div>
              <!-- /.box-body -->
                    
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>

                    <label></label>
                    
                </form>
            </div>
            <!-- //Conatc Form Section End -->
        </div>
    </div>
    
@stop


{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
     <script type="text/javascript" src="{{ asset('front_end/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->
@stop
