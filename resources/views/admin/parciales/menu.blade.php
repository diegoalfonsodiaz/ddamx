<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegacion</li>
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
        <li><a href="{{route('personas.index')}}"> <i class="fa fa-user-plus"></i> <span>  Personas </span> </a></li>
        <li><a href="{{route('solicitud.index')}}"> <i class="fa  fa-check-square"></i> <span>  Solicitud de factibilidad </span> </a></li>
        <li><a href="{{ url('/licencia') }}"> <i class="fa  fa-file-word-o"></i> <span>  Licencia </span> </a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-hand-lizard-o"></i> <span>Presolicitud</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ url('/ejecutor') }} ">Ejecutores</a></li>
            <li><a href="{{ url('/cargoejecutor') }} ">Cargo Ejecutor</a></li>
            <li><a href="{{ url('/tipoobra') }} ">Tipo de Obra</a></li>
            <li><a href="{{ url('/estadolicencia') }}">Estado licencia</a></li>
            <li><a href=" {{ url('/estadofactibilidad') }} ">Estado factibilidad</a></li>
          </ul>
        </li>

        @if (auth()->user()->hasRole(['admin']))
        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Licencias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/licencia') }}">Licencias</a></li>
            <li><a href="{{ url('/estadolicencia') }}">Estado licencias</a></li>
            <li><a href="{{ url('/tipovia') }}">Tipo de via </a></li>

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
            <li><a href="{{ url('/denuncia') }}">Denuncias </a></li>
            <li><a href="{{route('estadodenuncias.index')}}">Estado Denuncias</a></li>
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
            <li><a href="{{ url('/usuario') }}">Usuarios </a></li>
            <li><a href="{{'/rol'}}">Rol</a></li>
            <li><a href="{{ url('/asignacion') }}">Asignación de Roles</a></li>
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
            <li><a href="{{ url('/bitacora') }}">Bitacora  </a></li>
            <li><a href="{{ url('/asunto') }}">Asunto de Bitacora</a></li>
          </ul>
        </li>
        @endif
        <li><a href="{{route('contacto.index')}}"> <i class="fa  fa-phone"></i> <span>  Contacto </span> </a></li>
        
      </ul>