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
    <![endif]-->
    <title>
    	@section('title')
        | Welcome to Josh Frontend
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lib.css') }}">
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
                    <li><a href="{{ url('/') }}">Home</a>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Licencia</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/buscardpiestado') }}">Estado actual</a>
                            </li>
                            <li><a href="{{ url('/buscardpi') }}">Solicitud</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/denunciaexterna') }}">Denuncia</a>
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
                    La municipalidad de Quetzaltenango funciona desde 1,806 en la cabecera departamental de Quetzaltenango de la República de Guatemala. Es una ciudad que continúa en expansión, conserva muchos aspectos de su estilo neoclásico que recuerdan detalles de Europa, el edificio del palacio municipal desde su fundación ha conservado jardines y esculturas.
                </p>
                <h4>Siguenos</h4>
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
            <!-- //About Us Section End-->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contactanos</h4>
                <ul class="list-unstyled">
                    <li>14 Avenida, 6--06 zona 3</li>
                    <li>Quetzaltenango, Quetzaltenango</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Telefono:77672000 ext. 123</li>
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email: drenajes@munixela.gob.gt</li>
                    </li>
                    </li>
                </ul>
            </div>
            <!-- //Contact Section End -->
             </div>
        <!-- Footer Container Section End -->
    </footer>
    <!-- //Footer Section End -->




    <div class="copyright">
        <div class="container">
        <p>Copyright &copy; Josh Admin Template, 2017</p>
        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="{{ asset('js/frontend/lib.js') }}"></script>
    <!--global js end-->
    <!-- begin page level js -->
    @yield('footer_scripts')
    <!-- end page level js -->
</body>

</html>
