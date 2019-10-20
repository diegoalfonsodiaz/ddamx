<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
   
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/bootstrap.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_end/images/logo_muni_2.png')}}">
    <link rel="icon" type="image/x-icon" href="{{ asset('front_end/images/logo_muni_2.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/custom.css')}}">
    <link rel="shortcut icon" type="text/css" href="{{ asset('favicon.ico')}}">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/tabbular.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/css/jquery.circliful.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front_end/vendors/owl-carousel/owl.theme.css')}}">
    {!! htmlScriptTagJsApi() !!}
    <!--end of page level css-->
     
    
</head>

<body>
    
    <!-- Main Header -->
    <!-- Header Start -->
    <header class="main-header">
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
                            <li>
                                <a href="tel:"><i class="livicon" data-name="user" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="tel:" class="text-white">Login</a></label>
                            </li>
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
                <a class="navbar-brand" href="#"><img src="{{ asset('front_end/images/logo_muni_10.png')}}" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/inicio') }}">Home</a>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Licencia</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="typography.html">Estado actual</a>
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('header')
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        @yield('contenido_front')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


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
    <!-- Copy right Section Start -->
    <!-- Copy right Section End -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>
    <!--global js starts-->
    <script type="text/javascript" src="front_end/js/jquery.min.js"></script>
    <script type="text/javascript" src="front_end/js/bootstrap.min.js"></script>
    <script src="front_end/js/style-switcher.js" type="text/javascript"></script>
    <script type="text/javascript" src="front_end/js/raphael.js"></script>
    <script type="text/javascript" src="front_end/js/livicons-1.4.min.js"></script>
    <script type="text/javascript" src="front_end/js/josh_frontend.js"></script>
    <!--global js end-->
    <!-- page level js starts-->
    <script type="text/javascript" src="front_end/js/jquery.circliful.js"></script>
    <script type="text/javascript" src="front_end/vendors/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="front_end/js/carousel.js"></script>
    <script type="text/javascript" src="front_end/js/index.js"></script>
    <!--page level js ends-->

    <!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/plantilla/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- DataTables -->
<script src="/plantilla/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/plantilla/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/plantilla/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/plantilla/js/adminlte.min.js"></script>
<script>
 
  
  $(document).ready(function() {
    $('#persona-table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false,
      
    });

} );

$(document).ready(function() {
    $('#estadodenuncia-table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false,
      
    });
    
} );

</script>

<!--<script>
 
  $(document).ready(function() {
    $('#persona-table').DataTable({
      "Serveside":true,
      "ajax":"{{ url('api/personas')}}",
      "columns":[
         {data:'id'},
         {data:'dpi'},
         {data:'nombre'},
         {data:'apellido'},
         {data:'telefono'},
         {data:'correo'},
         {data:'estado'},

      ]
    });
} );
</script>-->
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>