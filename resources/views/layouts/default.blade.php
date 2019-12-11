<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <![endif]-->
    <title>
    	@section('title')
        | DDAMX
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/lib.css') }}">
    {!! htmlScriptTagJsApi() !!}
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    <!-- Header Start -->
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/Municipalidad-de-Quetzaltenango-405670849462565/"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Munixelaorg"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/munidequetzaltenango/"> <i class="livicon" data-name="instagram" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC5Vqcj1teY2uB9Pm0DTIgSA"> <i class="livicon" data-name="youtube" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li class="pull-right">
                        <ul class="list-inline icon-position">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="mailto:" class="text-white">drenajes@munixela.gob.gt</a></label>
                            </li>
                            <li>
                                <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="tel:" class="text-white">(502) 77672000 ext. 123</a></label>
                            </li>
                            @if (Auth::check())
                            <!-- <a class="livicon" data-name="user" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff" href="{{ url('/menu') }}">Sistema Interno</a> -->
                            <li>
                                <a href="{{ url('/menu') }}"><i class="livicon" data-name="user" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="{{ url('/menu') }}" class="text-white">Sistema Interno</a></label>
                            </li>
                            @else
                            <li>
                                <a href="{{ url('/login') }}"><i class="livicon" data-name="user" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="{{ url('/login') }}" class="text-white">Login</a></label>
                             </li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Start -->
        
        <nav class="navbar navbar-default container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> <i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('front_end/images/logo_muni_10.png')}}" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/') }}">Inicio</a>
                    <li><a href="{{ url('/buscarcodigo') }}">Estado de licencia</a>      
                    </li>
                    <li><a href="{{ url('/buscardpiestado') }}">Estado de factibilidad</a>
                    </li>
                    <li><a href="{{ url('/buscardpi') }}">Solicitud de factibilidad</a>
                    </li>
                    <li><a href="{{ url('/denunciaexterna') }}">Denuncia</a>
                    </li>
                    <li><a href="{{ url('/nosotros') }}">Nosotros</a>
                    </li>
                    <li><a href="{{ url('/contactoexterno') }}">contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        
        <!-- Nav bar End -->
    </header>
    <!-- //Header End -->
    
    <!-- slider / breadcrumbs section -->
    @yield('top')

    <!-- Content -->
    @yield('content')

        <!-- Footer Section Start -->
    <footer>
        <!-- Footer Container Start -->
        <div class="container footer-text">
            <!-- About Us Section Start -->
            <div class="col-sm-4">
                <h4>Acerca de nosotros</h4>
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
            <!-- //About Us Section End-->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contáctenos</h4>
                <ul class="list-unstyled">
                    <li>14 Avenida, 6-06 zona 3</li>
                    <li>Quetzaltenango, Quetzaltenango</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Telefono:77672000 ext. 123</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email: drenajes@munixela.gob.gt</li>
                    </li>
                    </li>
                </ul>
                <h5>Síguenos</h5>
                <ul class="list-inline">
                    <li>
                        <a href="https://www.facebook.com/Municipalidad-de-Quetzaltenango-405670849462565/"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Munixelaorg"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/munidequetzaltenango/"> <i class="livicon" data-name="instagram" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC5Vqcj1teY2uB9Pm0DTIgSA"> <i class="livicon" data-name="youtube" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- //Contact Section End -->
            <div class="col-sm-4">
            <h4>Formulario de contacto</h4>

                <form  autocomplete="off" role="form" method="POST" action="{{route('contacto.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}   

                    <div class="form-group">
                    <strong>Nombre y apellido</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre y apellido">
                    </div>

                    <div class="form-group">
                    <strong>Teléfono</strong>
                    <input type="text" name="email" class="form-control" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                    <strong>Descripción</strong>
                    <textarea type="text" autocomplete="off" name="descripcion" class="form-control" rows="3" placeholder="Descripción"></textarea>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    {!! htmlFormSnippet() !!}
                    @error('g-recaptcha-response')
                        <span class="invalid-feedback" role="alert" style="display: block">
                            <strong>{{ $message}}</strong>
                        </span>
                    @enderror
                    </div> 
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
                </div>

             </div>
        <!-- Footer Container Section End -->
    </footer>
    <!-- //Footer Section End -->

    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Volver a la cima" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('front_end/js/frontend/lib.js') }}"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>
