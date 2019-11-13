@extends('layouts/default')

{{-- Page title --}}
@section('title')
Denuncia
@parent
@stop

{{-- Page content --}}
@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>    
        </ul>  
        
    @endforeach
    </div>
@endif

@if($errors->any())
        <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
                Ingrese  imagenes  con  formato  JPG,  JPEG,  BMP,  PNG.
                <button type="button" class="close" data-dismiss="alert" alert-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif

    <!-- Container Section Start -->
    <div class="container">
            <!-- Contact form Section Start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2>Realice su denuncia</h2>
                 <label><span style="color:red">* </span><span style="color:black">Campos obligatorios</span></label>

                <form role="form" method="POST" action="{{route('denunciaexterna.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}   

                    <div class="form-group">
                    <strong>Descripción de la denuncia<span style="color:red"> *</span></strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="descripción" required>
                    </div>

                    <div class="form-group" style="display: none">
                    <label for="direccion_fab">Fecha en que sucedio</label>
                    <input type="date" name="fecha" value="<?php echo date("Y-m-d");?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <strong for="exampleInputPassword1">Seleccione Imagen como prueba</strong>
                    <input name="foto" type="file" class="form-control" id="exampleInputPassword1" placeholder="Seleccione una imagen">
                    </div>

                    <div class="form-group">
                    <strong>Dirección de la persona denunciante</strong>
                    <input type="text" name="direccion" class="form-control" placeholder="dirección">
                    </div>

                    <div class="form-group">
                    <strong>Teléfono de la persona denunciante<span style="color:red"> *</span></strong>
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
                <div class="box-footer">
                        <input type ='button' class="btn btn-primary"  value = 'Seguimiento de la denuncia' onclick="location.href = '{{ url('/buscartelefono') }}'"/>
                    </div>
               
            </div>
            <!-- //Conatc Form Section End -->
        
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