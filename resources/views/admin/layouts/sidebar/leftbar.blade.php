<aside class="left-side sidebar-offcanvas">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('img/avatar3.png')}}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Hello, {{ Auth::user()->first_name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      @if (Auth::user()->role > 2)
      <li class="@if(isset($activeDashboard)) {{ $activeDashboard }} @endif">
        <a href="{{ route('ronchoDashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="@if(isset($activeProduct)) {{ $activeProduct }} @endif">
        <a href="{{ route('product.create') }}">
          <i class="fa fa-edit"></i> <span>Product</span>
        </a>
      </li>

      <li class="treeview @if(isset($activeProject)) {{ $activeProject }} @endif">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Projects</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('energy.create') }}"><i class="fa fa-angle-double-right"></i> Energy</a></li>
          <li><a href="{{ route('ict.create') }}"><i class="fa fa-angle-double-right"></i> ICT</a></li>
          <li><a href="{{ route('engineering.create') }}"><i class="fa fa-angle-double-right"></i> Engineering</a></li>
        </ul>
      </li>

      <li class="@if(isset($activeNews)) {{ $activeNews }} @endif">
        <a href="{{ route('news.create') }}">
          <i class="fa fa-edit"></i> <span>News</span>
        </a>
      </li>

      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Tables</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Testimony List</a></li>
          <li><a href="#"><i class="fa fa-angle-double-right"></i>Message List</a></li>
        </ul>
      </li> -->
      <li class="@if(isset($activeMessage)) {{ $activeMessage }} @endif">
        <a href="{{ route('message.index') }}">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <!-- <small class="badge pull-right bg-yellow">12</small> -->
        </a>
      </li>
      <li class="@if(isset($activeRequest)) {{ $activeRequest }} @endif">
        <a href="{{ route('requestform.index') }}">
          <i class="fa fa-envelope"></i> <span>Requests</span>
          <!-- <small class="badge pull-right bg-yellow">12</small> -->
        </a>
      </li>
      @endif
      <hr>
      <hr>
      @if(Auth::user()->role == 4)
      <li class="treeview ">
        <a href="#">
          <i class="fa fa-users"></i> <span>Admin</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('adminuser.index') }}"><i class="fa fa-angle-double-right"></i> View Admin</a></li>
          <li><a href="{{ route('adminuser.create') }}"><i class="fa fa-angle-double-right"></i> Add Admin</a></li>
        </ul>
      </li>
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
