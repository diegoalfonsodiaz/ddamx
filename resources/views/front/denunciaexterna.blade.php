@extends('layouts/default')

{{-- Page content --}}
@section('content')

    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2>Realize su denuncia</h2>

                <form role="form" method="POST" action="{{route('denunciaexterna.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}   

                    <div class="form-group">
                    <strong>Descripción de la denuncia</strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="descripcion" required>
                    </div>

                    <div class="form-group" style="display: none">
                    <label for="direccion_fab">Fecha en que sucedio</label>
                    <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label for="exampleInputPassword1">Seleccione Imagen como prueba</label>
                    <input name="foto" type="file" class="form-control" id="exampleInputPassword1" placeholder="Seleccione una imagen">
                    </div>

                    <div class="form-group">
                    <strong>Dirección de la persona denunciante (Opcional)</strong>
                    <input type="text" name="direccion" class="form-control" placeholder="dirección">
                    </div>

                    <div class="form-group">
                    <strong>Teléfono de la persona denunciante</strong>
                    <input type="text" name="telefono" class="form-control" placeholder="teléfono" required>
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