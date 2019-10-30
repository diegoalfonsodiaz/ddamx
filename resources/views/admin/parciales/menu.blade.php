<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegacion</li>
        <li {{ request()->is('menu') ? 'class=active' : '' }}><a href=" {{ url('/menu') }} "><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
        <li {{ request()->is('persona') ? 'class=active' : '' }}><a href="{{route('personas.index')}}"> <i class="fa fa-user-plus"></i> <span>  Personas </span> </a></li>
        <li {{ request()->is('ejecutor') ? 'class=active' : '' }} > <a href=" {{ url('/ejecutor') }} "> <i class="fa fa-address-card-o"></i> <span>Ejecutores</span> </a></li>
        <li {{ request()->is('solicitud') ? 'class=active' : '' }}><a href="{{route('solicitud.index')}}"> <i class="fa fa-folder-open"></i> <span>  Solicitudes de factibilidad </span> </a></li>
        <li {{ request()->is('licencia') ? 'class=active' : '' }}><a href="{{ url('/licencia') }}"> <i class="fa  fa-file-word-o"></i> <span>  Licencias </span> </a></li>
        <li {{ request()->is('denuncia') ? 'class=active' : '' }}><a href="{{ url('/denuncia') }}"> <i class="fa fa-bullhorn"></i> <span> Denuncias </span> </a></li>
        <li {{ request()->is('bitacora') ? 'class=active' : '' }}><a href="{{ url('/bitacora') }}"> <i class="fa fa-desktop"></i> <span>Bitácora  </span> </a></li>        
        @if (auth()->user()->hasRole(['admin']))
        <li class="treeview ">
          <a href="#"><i class="fa fa-hand-lizard-o"></i> <span>Mantenimiento</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{ request()->is('cargoejecutor') ? 'class=active' : '' }}><a href="{{ url('/cargoejecutor') }} ">Cargos de ejecutor</a></li>
          
            <li {{ request()->is('estadofactibilidad') ? 'class=active' : '' }}><a href=" {{ url('/estadofactibilidad') }} ">Estados de factibilidad</a></li>
            <li {{ request()->is('estadolicencia') ? 'class=active' : '' }}><a href="{{ url('/estadolicencia') }}">Estados de licencias</a></li>
            <li {{ request()->is('estadodenuncia') ? 'class=active' : '' }}><a href="{{route('estadodenuncias.index')}}">Estados de denuncias</a></li>
            <li {{ request()->is('tipoobra') ? 'class=active' : '' }}><a href="{{ url('/tipoobra') }} ">Tipos de obra</a></li>
            <li {{ request()->is('tipovia') ? 'class=active' : '' }}><a href="{{ url('/tipovia') }}">Tipos de vía </a></li>
            <li {{ request()->is('asunto') ? 'class=active' : '' }}><a href="{{ url('/asunto') }}">Asuntos de bitácora</a></li>
           
          </ul>
        </li>
        @endif
        
        <li class="treeview {{request()->is('/licencia') ? 'active' :''}}">
          <a href="#"><i class="fa fa-book"></i> <span>Seguimientos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <li {{ request()->is('ticketdenunciacreate') ? 'class=active' : '' }}><a href="{{ url('/ticketdenunciacreate') }}">Seguimiento de denuncia</a></li>
          <li {{ request()->is('ticketcreate') ? 'class=active' : '' }}><a href="{{ url('/ticketcreate') }}">Seguimiento de bitácora</a></li>
          </ul>
        </li>

        @if (auth()->user()->hasRole(['admin']))

        <li class="treeview">
          <a href="#"><i class="fa  fa-user"></i> <span>Usuarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{ request()->is('usuario') ? 'class=active' : '' }}><a href="{{ url('/usuario') }}">Usuarios </a></li>
            <li {{ request()->is('rol') ? 'class=active' : '' }}><a href="{{'/rol'}}">Rol</a></li>
            <li {{ request()->is('asignacion') ? 'class=active' : '' }}><a href="{{ url('/asignacion') }}">Asignación de roles</a></li>
          </ul>
        </li>
        @endif

       
        <li {{ request()->is('contacto') ? 'class=active' : '' }}><a href="{{route('contacto.index')}}"> <i class="fa  fa-phone"></i> <span>  Contacto </span> </a></li>
        
      </ul>