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
                    La Dirección Municipal de Drenajes y Alcantarillados fue creada en el año 2012a través del acuerdo con el Punto Octavo del
                    Acta Número 159-2012.
                </p>
                <p>
                    La Dirección es la dependencia encargada de administrar, operar y mantener el sistema de drenaje del municipio de Quetzaltenango. La 
                    mayor parte del sistema es de drenaje combinado, por lo que el agua de lluvia y residual se conduce por una misma tubería hasta ser 
                    descargada en el Río Seco y Xequijel. Actualmente el municipio posee más de 250 km de tuberías de distintos diámetros y más de 2,600 
                    tragantes que recolectan el agua de lluvia de las calles.
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
                    <img src="{{ asset('front_end/images/mision1.jpg') }}" alt="image_12" class="img-responsive">
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
                    <img src="{{ asset('front_end/images/vision2.jpg') }}" alt="image_11" class="img-responsive">
                    <p>
                        Somos el servicio municipal de referencia en la región occidental para el manejo de aguas residuales y aguas pluviales, financieramente auto sostenible, administrativamente eficiente e integral en las soluciones que propone para la gestión de aguas residuales y pluviales en el área urbana y rural del municipio de Quetzaltenango.
                    </p>
                </div>
            <!-- //About Us End -->
            
        </div>
    </div>  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="control-bar sandbox-control-bar mt10">
                    <h2>Preguntas frecuentes</h2>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="panel-group panel-accordion faq-accordion">
                            <div id="faq">
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="1">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question1">
                                                <strong class="c-gray-light">1.</strong>
                                                 ¿Me dieron mi herencia y no sé cómo solicitar los servicios?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                Debe presentar la papelería completa que se solicita en requisitos para solicitud domiciliar y presentar los mismos en 
                                                ventanilla de atención al público ubicada en 10 avenida entre 6ª. Y 8ª. Calle de la zona 1 Centro Comercial “El Centro”.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="2">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question2">
                                                <strong class="c-gray-light">2.</strong>
                                                ¿Hay una candela domiciliar, pero, soy dueño de una parte de la casa, me puedo conectar en la misma?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                No, es indispensable que cada servicio tenga su propia candela domiciliar.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="3">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question3">
                                                <strong class="c-gray-light">3.</strong>
                                                La finca matriz se desmembró y solo existe un servicio de drenaje, ¿la persona que es dueña de la finca matriz es dueña de dicho servicio?

                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <p>
                                                   - Los servicios si pertenecen a la finca matriz.
                                                </p>
                                                <p>
                                                   - Las demás personas deben solicitar un nuevo servicio de drenaje domiciliar cumpliendo con todos los requisitos de drenaje domiciliar.
                                                </p>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="4">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question4">
                                                <strong class="c-gray-light">4.</strong>
                                                Tengo 3 locales comerciales en mi propiedad, ¿necesito solicitar conexión de drenaje por cada uno?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            Si cada local comercial tiene su propia nomenclatura, si es necesario realizar la solicitud por cada local comercial.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="5">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question5">
                                                <strong class="c-gray-light">5.</strong>
                                                ¿Cómo saber si es proyecto Care o Municipal?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                En el momento de la inspección se le indicará a que tipo de proyecto corresponde de acuerdo a su ubicación.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="6">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question6">
                                                <strong class="c-gray-light">6.</strong>
                                                ¿Si mi construcción se encuentra dentro de un parcelamiento, puedo hacer mi solicitud de drenaje?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            No es necesario ya que el desarrollador del parcelamiento debe gestionar la licencia de conexión previo a conectarse a la red Municipal.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-12 panel panel-default" data-value="7">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question7">
                                                <strong class="c-gray-light">7.</strong>
                                                ¿Puedo solicitar mantenimiento de sistema de drenaje si este se encuentra dentro de un parcelamiento privado?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            Para poder dar mantenimiento es necesario que el parcelamiento esté aprobado a nivel de proyecto por la municipalidad de Quetzaltenango y las calles deben de estar donadas a la misma; ya que si las calles son privadas, la dirección de drenajes no puede atender la solicitud de mantenimiento.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-12 panel panel-default" data-value="8">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question8">
                                                <strong class="c-gray-light">8.</strong>
                                                ¿Cuánto tiempo se tarda el proceso de conexión?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question8" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ol>
                                                <li>
                                                Si hay que solicitar remoción de pavimento, adoquín, piedra o asfalto.
                                                </li>
                                                <li>
                                                  Normalmente hasta 10 días hábiles.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="9">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question9">
                                                <strong class="c-gray-light">9.</strong>
                                                ¿Si solicito dictamen de factibilidad por conexión de drenaje cuanto tiempo debo esperar?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question9" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            Normalmente 15 días hábiles. 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="10">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question10">
                                                <strong class="c-gray-light">10.</strong>
                                                ¿Cómo se paga el derecho de conexión?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question10" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            El derecho de conexión se paga al momento de tener completa la papelería de licencia de conexión. Y se les dará una orden de pago que se realiza en el Banco Banrural de la municipalidad. NO SE DEBE REALIZAR PAGOS A TRABAJADORES DE LA MUNICIPALIDAD.  
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
