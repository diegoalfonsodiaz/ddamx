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
        <div class="item"><img src="{{ asset('front_end/images/Portada5.jpg') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('front_end/images/Portada3.jpg') }}" alt="slider-image">
        </div>
        <div class="item"><img src="{{ asset('front_end/images/Portada4.jpg') }}" alt="slider-image">
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
                <h3 class="border-primary"><span class="heading_border bg-primary">Nuestros servicios en linea</span></h3>
            </div>
            <div class="col-sm-6 col-md-3 wow bounceInLeft" data-wow-duration="3.5s">
                <div class="box">
                    <div class="box-icon">
                        <i class="livicon icon" data-name="search" data-size="55" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    </div>
                    <div class="info">
                        <h3 class="success text-center">Consulta</h3>
                        <p>Consulta si cuentas con la licencia para poder instalar los servicios de alcantarillado y drenaje.</p>
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
                        <h3 class="primary text-center">Solicita</h3>
                        <p>En caso de no contar con la licencia de conexión de drenaje y alcantarillado realiza la solicitud de factibilidad para la conexión de los servicios.</p>
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
                        <h3 class="warning text-center">Denuncia</h3>
                        <p>Reporta cualquier anomalía que veas, esto nos ayudara a ofrecerte un mejor servicio para todos.</p>
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
                        <h3 class="yellow text-center">Contactanos</h3>
                        <p>Contacta con nosotros para poder realizar cualquier trámite o hacernos saber cualquier duda que tengas.</p>
                        <div class="text-right primary"><a href="{{ url('/contactoexterno') }}">Cantactanos</a>
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
                        <h1 class="purchae-hed">Haz tu solicitud de licencia desde el sitio web</h1></div>
                    <div class="col-md-5 col-sm-5 col-xs-12"><a href="{{ url('/buscardpi') }}" class="btn btn-primary purchase-styl ">Solicita ahora</a></div>
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
