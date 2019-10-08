<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegacion</li>
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
        <li><a href="{{route('solicitud.index')}}"> <i class="fa fa-circle-o text-aqua"></i> <span>  Solicitud de factibilidad </span> </a></li>
        <li><a href="{{route('personas.index')}}"> <i class="fa fa-circle-o text-aqua"></i> <span>  Personas </span> </a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Presolicitud</span>
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

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Licencias</span>
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


        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Denuncias</span>
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
          <a href="#"><i class="fa fa-link"></i> <span>Usuarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/usuario') }}">Usuarios </a></li>
            <li><a href="#">Rol</a></li>
          </ul>
        </li>
        @endif


        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Bitacora</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('/bitacora') }}">Bitacora  </a></li>
            <li><a href="{{ url('/asunto') }}">Asunto de Bitacora</a></li>
          </ul>
        </li>

        
      </ul>