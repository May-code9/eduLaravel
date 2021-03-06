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
      <li class="treeview @if(isset($activeCourse)) {{ $activeCourse }} @endif">
        <a href="#">
          <i class="fa fa-book"></i> <span>Courses</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('course.create') }}"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="{{ route('course.index') }}"><i class="fa fa-search"></i> View</a></li>
          <li><a href="{{ route('trashedCourse.index') }}"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>

      <li class="treeview @if(isset($activeContent)) {{ $activeContent }} @endif">
        <a href="#">
          <i class="fa fa-folder-open-o"></i> <span>Course Contents</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('content.create') }}"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="{{ route('content.index') }}"><i class="fa fa-search"></i> View</a></li>
          <li><a href="{{ route('trashedContent.index') }}"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>

      <li class="treeview @if(isset($activeInstructor)) {{ $activeInstructor }} @endif">
        <a href="#">
          <i class="fa fa-graduation-cap"></i> <span>Instructors</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('instructor.create') }}"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="{{ route('instructor.index') }}"><i class="fa fa-search"></i> View</a></li>
          <li><a href="{{ route('trashedInstructor.index') }}"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>
      <li class="treeview @if(isset($activeSchool)) {{ $activeSchool }} @endif">
        <a href="#">
          <i class="fa fa-institution"></i> <span>Schools</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('school.create') }}"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="{{ route('school.index') }}"><i class="fa fa-search"></i> View</a></li>
          <li><a href="{{ route('trashedSchool.index') }}"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>

      @endif
      <hr>
      <hr>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
