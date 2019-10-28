@extends('layouts/default')

{{-- Page title --}}
@section('title')
Preguntas frecuentes
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--start of page level css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/frontend/faq.css') }}">
    <!--end of page level css-->
@stop



{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
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
                                                Debe presentar la papelería completa que se solicita en requisitos para solicitud domiciliar y presentar los mismos en ventanilla municipal ubicada en 10 avenida entre 6ª. Y 8ª. Calle de la zona 1 Centro Comercial “El Centro”.
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
o	¿los servicios si pertenecen a la finca matriz?
o	¿las demás personas deben solicitar un nuevo servicio de drenaje domiciliar cumpliendo con todos los requisitos de drenaje domiciliar?

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
                                            Si cada local comercial tiene su propia nomenclatura si es necesario realizar la solicitud por cada local comercial.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-1 col-lg-12 panel panel-default" data-value="5">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question5">
                                                <strong class="c-gray-light">5.</strong>
                                                ¿Cómo es saber si es proyecto CARE o Municipal?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                En el momento de la inspección se le indica que tipo de proyecto. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="6">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question6">
                                                <strong class="c-gray-light">6.</strong>
                                                ¿Si son lotificaciones privadas, puedo hacer si solicitud si soy dueño de un lote?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                No se puede realizar, ya que el desarrollador debe realizar dicha solicitud. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-12 panel panel-default" data-value="7">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question7">
                                                <strong class="c-gray-light">7.</strong>
                                                ¿Puede solicitud algún condominio o lotificación mantenimiento de drenajes?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                Debe estar a nivel de proyecto aprobado por la Municipalidad y las calles deben estar donadas a la misma, ya que si las calles son privadas no pueda la Dirección de Drenajes realizar el mismo. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mix category-3 col-lg-12 panel panel-default" data-value="8">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question8">
                                                <strong class="c-gray-light">8.</strong>
                                                ¿Cuánto tiempo se tarda el proceso de licencia?
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
                                                    Normalmente 7 días hábiles.
                                                </li>
                                                <li>
                                                    Si hay que solicitar remoción de pavimento, adoquín, piedra o asfalto 10 días hábiles.
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
                                                15 días hábiles. 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mix category-2 col-lg-12 panel panel-default" data-value="10">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#question10">
                                                <strong class="c-gray-light">10.</strong>
                                                ¿Forma de pago para derecho de conexión?
                                                <span class="pull-right">
                                                    <i class="glyphicon glyphicon-plus"></i>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="question10" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                               Se paga un derecho de conexión, se emite al tener la papelería completa y se da un orden de pago que se realiza en BANRURAL, ningún pago se realiza a trabajadores de la municipalidad.  
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
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/faq.js') }}"></script>
    <script type="text/javascript" src="{{ asset('front_end/vendors/mixitup/jquery.mixitup.js') }}"></script>
@stop
