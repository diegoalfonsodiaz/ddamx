@extends('layouts/default')

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/frontend/contact.css') }}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
    <!-- Map Section Start -->
<div class="container">
    <div class="row">
                <div class="col-md-6 col-sm-6 wow zoomInLeft" data-wow-duration="3s">
                    <div class="text-left">
                        <div>
                            <h4 class="border-success"><span class="heading_border bg-success">Dirección de drenaje y alcantarillo de Quetzaltenango (DDAMX)</span></h4>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.6322129269306!2d-91.51916458704228!3d14.84588568964666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858ea2abe445135f%3A0x7acaa13185a28559!2sEmpresa%20Municipal%20Aguas%20de%20Xelaj%C3%BA!5e0!3m2!1ses-419!2sgt!4v1569819907699!5m2!1ses-419!2sgt" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="col-md-6 col-sm-6 wow zoomInLeft" data-wow-duration="3s">
                    <div class="text-left">
                        <div>
                            <h4 class="border-success"><span class="heading_border bg-success">Ventanilla de atención al público</span></h4>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.86439296919!2d-91.51988868515699!3d14.832866989654864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMTTCsDQ5JzU4LjMiTiA5McKwMzEnMDMuNyJX!5e0!3m2!1ses-419!2sgt!4v1572220387042!5m2!1ses-419!2sgt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
    </div>
 </div> 

    <!-- //map Section End -->
    <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <!-- Contact form Section Start -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2>Formulario de contacto</h2>

                <form role="form" method="POST" action="{{route('contacto.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}   

                    <div class="form-group">
                    <strong>Nombre</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="nombre">
                    </div>

                    <div class="form-group">
                    <strong>Email</strong>
                    <input type="text" name="email" class="form-control" placeholder="email">
                    </div>
                    <div class="form-group">
                    <strong>Descripcion</strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="descripcion">
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
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('front_end/vendors/gmaps/js/gmaps.min.js') }}" ></script>
    <!--page level js ends-->
    <script>
        $(document).ready(function() {
            var map = new GMaps({
                el: '#map',
                lat: 38.8921021,
                lng: -77.0260358
            });
            map.addMarker({
                lat: 38.8921021,
                lng: -77.0260358,
                title: 'Washington'
            });
        });
    </script>

@stop