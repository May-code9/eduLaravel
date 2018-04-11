<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </a>
  <div class="navbar-right">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li>
        <a href="{{route('edu_home')}}" class="btn btn-default btn-flat" style="padding-top: 14px;padding-bottom: 14px;">Home</a>
      </li>
      <!-- Notifications: style can be found in dropdown.less -->

      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="glyphicon glyphicon-user"></i>
          <span>{{ Auth::user()->first_name }} <i class="caret"></i></span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header bg-light-blue">
            <img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image" />
            <p>
              @if($admin->role == 4)
              Admin - {{ Auth::user()->first_name }}
              @else
              User - {{ Auth::user()->first_name }}
              @endif
              <small>Member since {{ Auth::user()->created_at}}</small>
            </p>
          </li>

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
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
