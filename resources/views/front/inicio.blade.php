@extends('layouts/default')

{{-- Page title --}}
@section('title')
Inicio
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/frontend/jquery.circliful.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/owl_carousel/css/owl.theme.css') }}">

    <!--end of page level css-->
@stop

{{-- slider --}}
@section('top')
<div class="container">
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="{{ asset('front_end/images/Portada7.jpg') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('front_end/images/Portada6.jpg') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('front_end/images/Portada8.jpg') }}" alt="slider-image">
        </div>
    </div>
    <!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')
    
        
        <!-- Service Section Start-->
        <div class="row">
            <!-- Responsive Section Start -->
            <div class="text-center">
                <h3 class="border-primary"><span class="heading_border bg-primary">Nuestros servicios en línea</span></h3>
            </div>
            <div class="col-sm-6 col-md-3 wow bounceInLeft" data-wow-duration="3.5s">
                <div class="box">
                    <div class="box-icon">
                        <i class="livicon icon" data-name="search" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </div>
                    <div class="info">
                        <h3 class="success text-center">Consulte</h3>
                        <p>Consulte su cuenta con licencia para su uso de los servicios municipales de drenajes</p>
                        <p></p>
                        <div class="text-right primary"><a href="{{ url('/buscarcodigo') }}">Consultar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Responsive Section End -->
            <!-- Easy to Use Section Start -->
            <div class="col-sm-6 col-md-3 wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.4s">
                <!-- Box Start -->
                <div class="box">
                    <div class="box-icon box-icon1">
                        <i class="livicon icon1" data-name="doc-portrait" data-size="55" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                    </div>
                    <div class="info">
                        <h3 class="primary text-center">Solicite</h3>
                        <p>Solicite dictamen de factibilidad para conocer si es posible recibir el servicio municipal de drenajes.</p>
                        <p></p>
                        <div class="text-right primary"><a href="{{ url('/buscardpi') }}">Solicitar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Easy to Use Section End -->
            <!-- Clean Design Section Start -->
            <div class="col-sm-6 col-md-3 wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.8s">
                <div class="box">
                    <div class="box-icon box-icon2">
                        <i class="livicon icon1" data-name="warning" data-size="55" data-loop="true" data-c="#f81414" data-hc="#f81414"></i>
                    </div>
                    <div class="info">
                        <h3 class="warning text-center">Denuncie</h3>
                        <p>Reporte cualquier anomalía que observe, esto nos ayuda a ofrecer un mejor servicio para todos.</p>
                        <p></p>
                        <div class="text-right primary"><a href="{{ url('/denunciaexterna') }}">Denunciar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Clean Design Section End -->
            <!-- 20+ Page Section Start -->
            <div class="col-sm-6 col-md-3 wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.2s">
                <div class="box">
                    <div class="box-icon box-icon3">
                        <i class="livicon icon1" data-name="phone" data-size="55" data-loop="true" data-c="#f2d22e" data-hc="#f2d22e"></i>
                    </div>
                    <div class="info">
                        <h3 class="yellow text-center">Contáctenos</h3>
                        <p>Comuníquese con nosotros para para cualquier trámite que desee realizar o hacernos saber de cualquier duda que tenga.</p>
                        <div class="text-right primary"><a href="{{ url('/contactoexterno') }}">Contáctenos</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //20+ Page Section End -->
        </div>
        <!-- //Services Section End -->
    

    <section class="purchas-main">
            <div class="container bg-border wow pulse" data-wow-duration="2.5s">
                <div class="row">

                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h1 class="purchae-hed">Realice su solicitud de dictamen de factibilidad desde el sitio web</h1></div>
                    <div class="col-md-5 col-sm-5 col-xs-12"><a href="{{ url('/buscardpi') }}" class="btn btn-primary purchase-styl ">Solicite ahora</a></div>
                </div>
            </div>
    </section>
    <br>
    <!-- Layout Section Start -->
    
        <div class="container">
         
                    <div>
                        <img src="{{ asset('front_end/images/Proceso_licencia.png') }}" style="width: 100%; height:     100%"/>
                    </div>
           
        </div>

    </div>
    <!-- //Container End -->
</div>

<br>
<br>

@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/jquery.circliful.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/vendors/wow/js/wow.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('front_end/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/index.js') }}"></script>
    <!--page level js ends-->
@stop
