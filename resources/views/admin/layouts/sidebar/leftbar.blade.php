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
      @if ($admin->role > 2)
      <li class="@if(isset($activeDashboard)) {{ $activeDashboard }} @endif">
        <a href="{{ route('dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="">
        <a href="{{ route('admin.classroom') }}">
          <i class="fa fa-institution"></i> <span>Classroom</span>
        </a>
      </li>
      <li class="">
        <a href="{{ route('admin.bookshop') }}">
          <i class="fa fa-folder-open-o"></i> <span>Bookshop</span>
        </a>
      </li>
      <li class="treeview @if(isset($activeUser)) {{ $activeUser }} @endif">
        <a href="#">
          <i class="fa fa-group"></i> <span>Users</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="#"><i class="fa fa-search"></i> View</a></li>
        </ul>
      </li>

      <li class="@if(isset($activeMessage)) {{ $activeMessage }} @endif">
        <a href="#">
          <i class="fa fa-envelope"></i> <span>Mailbox</span>
          <!-- <small class="badge pull-right bg-yellow">12</small> -->
        </a>
      </li>
      <li class="@if(isset($activeRequest)) {{ $activeRequest }} @endif">
        <a href="#">
          <i class="fa fa-envelope"></i> <span>Requests</span>
          <!-- <small class="badge pull-right bg-yellow">12</small> -->
        </a>
      </li>

      @endif
      <hr>
      <hr>
      @if($admin->role == 4)
      <li class="treeview ">
        <a href="#">
          <i class="fa fa-user"></i> <span>Admin</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-edit"></i> View Admin</a></li>
          <li><a href="#"><i class="fa fa-search"></i> Add Admin</a></li>
        </ul>
      </li>
      @endif
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
