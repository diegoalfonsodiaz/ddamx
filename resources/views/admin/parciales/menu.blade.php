<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegacion</li>
        <li {{ request()->is('menu') ? 'class=active' : '' }}><a href=" {{ url('/menu') }} "><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
        <li {{ request()->is('persona') ? 'class=active' : '' }}><a href="{{route('personas.index')}}"> <i class="fa fa-user-plus"></i> <span>  Personas </span> </a></li>
        <li {{ request()->is('solicitud') ? 'class=active' : '' }}><a href="{{route('solicitud.index')}}"> <i class="fa  fa-check-square"></i> <span>  Solicitud de factibilidad </span> </a></li>
        <li {{ request()->is('licencia') ? 'class=active' : '' }}><a href="{{ url('/licencia') }}"> <i class="fa  fa-file-word-o"></i> <span>  Licencia </span> </a></li>
        
        
        <li class="treeview ">
          <a href="#"><i class="fa fa-hand-lizard-o"></i> <span>Presolicitud</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{ request()->is('ejecutor') ? 'class=active' : '' }} > <a href=" {{ url('/ejecutor') }} ">Ejecutores</a></li>
            <li {{ request()->is('cargoejecutor') ? 'class=active' : '' }}><a href="{{ url('/cargoejecutor') }} ">Cargo Ejecutor</a></li>
            <li {{ request()->is('tipoobra') ? 'class=active' : '' }}><a href="{{ url('/tipoobra') }} ">Tipo de Obra</a></li>
            <li {{ request()->is('estadofactibilidad') ? 'class=active' : '' }}><a href=" {{ url('/estadofactibilidad') }} ">Estado factibilidad</a></li>
          </ul>
        </li>
        @if (auth()->user()->hasRole(['admin']))
        <li class="treeview {{request()->is('/licencia') ? 'active' :''}}">
          <a href="#"><i class="fa fa-book"></i> <span>Licencias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{ request()->is('licencia') ? 'class=active' : '' }}><a href="{{ url('/licencia') }}">Licencias</a></li>
            <li {{ request()->is('estadolicencia') ? 'class=active' : '' }}><a href="{{ url('/estadolicencia') }}">Estado licencias</a></li>
            <li {{ request()->is('tipovia') ? 'class=active' : '' }}><a href="{{ url('/tipovia') }}">Tipo de via </a></li>

          </ul>
        </li>
        @endif

        <li class="treeview">
          <a href="#"><i class="fa  fa-gavel"></i> <span>Denuncias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
<<<<<<< HEAD
            <li><a href="{{ url('/denuncia') }}">Denuncias </a></li>
            <li><a href="{{ url('/ticketdenunciacreate') }}">Seguimiento  </a></li>
            <li><a href="{{route('estadodenuncias.index')}}">Estado Denuncias</a></li>
=======
            <li {{ request()->is('denuncia') ? 'class=active' : '' }}><a href="{{ url('/denuncia') }}">Denuncias </a></li>
            <li {{ request()->is('estadodenuncia') ? 'class=active' : '' }}><a href="{{route('estadodenuncias.index')}}">Estado Denuncias</a></li>
>>>>>>> ab736b8e5fed3f88594f8f02ca734be1b977c57c
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
            <li {{ request()->is('asignacion') ? 'class=active' : '' }}><a href="{{ url('/asignacion') }}">Asignación de Roles</a></li>
          </ul>
        </li>
        @endif

        @if (auth()->user()->hasRole(['admin']))
        <li class="treeview">
          <a href="#"><i class="fa fa-desktop"></i> <span>Bitacora</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{ request()->is('bitacora') ? 'class=active' : '' }}><a href="{{ url('/bitacora') }}">Bitacora  </a></li>
            <li {{ request()->is('asunto') ? 'class=active' : '' }}><a href="{{ url('/asunto') }}">Asunto de Bitacora</a></li>
            <li {{ request()->is('asunto') ? 'class=active' : '' }}><a href="{{ url('/ticketcreate') }}">Seguimiento</a></li>
          </ul>
        </li>
        @endif
        <li {{ request()->is('contacto') ? 'class=active' : '' }}><a href="{{route('contacto.index')}}"> <i class="fa  fa-phone"></i> <span>  Contacto </span> </a></li>
        
      </ul>