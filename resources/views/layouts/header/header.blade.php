<a href="{{url('/home')}}" class="logo">
  <span class="logo-mini"><b>ED</b></span>
  <span class="logo-lg"><b>Expediente</b>Digital</span>
</a>
<nav class="navbar navbar-static-top">
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset('admin-lte/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
          <span class="hidden-xs"> {{Auth::user()->name .' '. Auth::user()->lastname}} <i class="fa fa-angle-down pull-right"></i> </span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
            <img src="{{ asset('admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            <p>
              {{Auth::user()->rol==1 ? 'Admin - ' : ''}} {{Auth::user()->name .' '. Auth::user()->lastname}} 
              <small>{{Auth::user()->created_at}}</small>
            </p>
          </li>
          <li class="user-footer">
            @if (Auth::user()->rol!=1)
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            @endif
            <div class="pull-right">
              <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Cerrar </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>