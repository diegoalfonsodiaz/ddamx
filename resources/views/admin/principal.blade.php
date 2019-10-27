<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
@if (Auth::check())
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DDAMX</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/plantilla/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/plantilla/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/plantilla/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/plantilla/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/plantilla/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="/plantilla/bower_components/responsive/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="/plantilla/bower_components/responsive/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="/plantilla/css/skins/skin-blue.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DD</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DDAMX</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            
            
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img  src="{{ asset('images/logo_muni_3.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> </p>
          <!-- Status -->
          @Auth
          <span class="hidden-xs">{{ Auth::user()->name }}</span>
          <br>
          @endAuth
          <a href="#"><i class="fa fa-circle text-success"></i> En Linea</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
     @include('admin.parciales.menu')
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

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
        @yield('contenido')
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  </div>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">DDAMX</a>.</strong> Todos los derechos reservados.
  </footer>


<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/plantilla/bower_components/responsive/js/jquery-3.3.1.js"></script>
<script src="/plantilla/bower_components/responsive/js/jquery.dataTables.min.js"></script>
<!--<script src="/plantilla/bower_components/jquery/dist/jquery.min.js"></script>-->
<!-- Bootstrap 3.3.7 -->
<script src="/plantilla/bower_components/responsive/js/dataTables.responsive.min.js"></script>
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
      'responsive':true,
      
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
      'responsive':true,
      
    });
    
} );

</script>
</body>
</html>

@endif
