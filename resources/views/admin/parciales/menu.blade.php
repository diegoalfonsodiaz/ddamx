<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegacion</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Presolicitud</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{ url('/ejecutor') }} ">Ejecutores</a></li>
            <li><a href="{{ url('/cargoejecutor') }} ">Cargo</a></li>
            <li><a href="#">Tipo de Obra</a></li>
            <li><a href="{{ url('/tipoobra') }} ">Tipo</a></li>
            <li><a href="#">Solicitud</a></li>
            <li><a href="#">Personas</a></li>
            <li><a href="">Estado Licencia</a></li>
            <li><a href="#">Estado factibilidad</a></li>
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
            <li><a href="#">Licencias</a></li>
            <li><a href="#">Estado licencias</a></li>
            <li><a href="#">Tipo de via </a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Denuncias</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Denuncias </a></li>
            <li><a href="#">Estado Denuncias</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Usuarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Usuarios </a></li>
            <li><a href="#">Rol</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Bitacora</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Bitacora  </a></li>
            <li><a href="{{ url('/asunto') }}">Asunto de Bitacora</a></li>
          </ul>
        </li>

        
      </ul>