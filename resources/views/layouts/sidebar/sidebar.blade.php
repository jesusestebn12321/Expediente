<section class="sidebar">
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset('admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{Auth::user()->name .' '. Auth::user()->lastname}}</p>
    </div>
  </div>
  <ul class="sidebar-menu">
    <li class="header">MENU DE NAVEGACION</li>
      <li class="treeview">
        <a href="{{url('/home')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      @if (Auth::user()->rol==1)
      <li class="treeview">
        <a href="{{route('manageAdmin-Expediente-index')}}">
          <i class="fa fa-file"></i> <span>Expediente</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('manageAdmin-Expediente-create')}}">
          <i class="fa fa-plus"></i> <span>Crear Expediente</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('manageAdmin-reason-index')}}">
          <i class="fa fa-plus"></i> <span>Motivos De Demanda</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('manageAdmin-type-index')}}">
          <i class="fa fa-plus"></i> <span>Tipos de Demanda</span>
        </a>
      </li>
      @else
        <li class="treeview">
          <a href="{{route('manageUser-Expediente-index')}}">
            <i class="fa fa-file"></i> <span>Ver Expediente</span>
          </a>
        </li>
      @endif
      <li class="header">LABELS</li>
      <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-circle-o text-aqua"></i> <span>Salir</span> </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </li>
  </ul>
</section>