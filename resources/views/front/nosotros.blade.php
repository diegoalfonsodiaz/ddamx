@extends('layouts/default')

{{-- Page title --}}
@section('title')
Acerca de nosotros
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/frontend/aboutus.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/owl_carousel/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/devicon/devicon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/devicon/devicon-colors.css') }}">
    <!--end of page level css-->
@stop



{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->

        <div class="row">
            <!-- Left Heading Section Start -->

            <div class="col-md-7 col-sm-12 wow bounceInLeft" data-wow-duration="5s">
                <h2><label>Acerca de nosotros</label></h2>
                <p>
                    La municipalidad de Quetzaltenango funciona desde 1,806 en la cabecera departamental de Quetzaltenango de la República de Guatemala. Es una ciudad que continúa en expansión, conserva muchos aspectos de su estilo neoclásico que recuerdan detalles de Europa, el edificio del palacio municipal desde su fundación ha conservado jardines y esculturas.
                </p>
            </div>

            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-5 col-sm-12 slider wow fadeInRightBig" data-wow-duration="5s">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="{{ asset('front_end/images/nosotros_1.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('front_end/images/nosotros_2.jpg') }}" alt="slider-image">
                    </div>
                    <div class="item"><img src="{{ asset('front_end/images/nosotros_5.jpg') }}" alt="slider-image">
                    </div>
                </div>
            </div>
            <!-- //Slider End -->
        </div>

        <!-- //Slider Section End -->
        
         <!-- What we are section Start -->
        <div class="row">
            <!-- What we are Start -->
                <div class="col-md-6 col-sm-6 wow zoomInLeft" data-wow-duration="3s">
                    <div class="text-left">
                        <div>
                            <h4 class="border-warning"><span class="heading_border bg-warning">Misión</span></h4>
                        </div>
                    </div>
                    <img src="{{ asset('front_end/images/mision.jpg') }}" alt="image_12" class="img-responsive">
                    <p>
                        Proporcionar soluciones integrales y sostenibles para el manejo de aguas residuales y pluviales, tanto en el área urbana como en el área rural del municipio de Quetzaltenango.
                        Las condiciones municipales promueven con énfasis la competitividad e inversiones para lograr un desarrollo eficaz en los servicios y todos los ciudadanos puedan beneficiarse.
                    </p>
                 </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
                <div class="col-md-6 col-sm-6 wow zoomInRight" data-wow-duration="3s">
                    <div class="text-left">
                        <div>
                            <h4 class="border-success"><span class="heading_border bg-success">Visión</span></h4>
                        </div>
                    </div>
                    <img src="{{ asset('front_end/images/vision.jpg') }}" alt="image_11" class="img-responsive">
                    <p>
                        Somos el servicio municipal de referencia en la región occidental para el manejo de aguas residuales y aguas pluviales, financieramente auto sostenible, administrativamente eficiente e integral en las soluciones que propone para la gestión de aguas residuales y pluviales en el área urbana y rural del municipio de Quetzaltenango.
                    </p>
                </div>
            <!-- //About Us End -->
            
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
