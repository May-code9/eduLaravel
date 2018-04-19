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

      <li class="treeview @if(isset($activeAuthors)) {{ $activeAuthors }} @endif">
        <a href="#">
          <i class="fa fa-pencil"></i> <span>Authors</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('author.create') }}"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="{{ route('author.index') }}"><i class="fa fa-search"></i> View</a></li>
          <li><a href="{{ route('trashedAuthor.index') }}"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>

      <li class="treeview @if(isset($activeCategory)) {{ $activeCategory }} @endif">
        <a href="#">
          <i class="fa fa-sitemap"></i> <span>Category</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('bookCategory.create') }}"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="{{ route('bookCategory.index') }}"><i class="fa fa-search"></i> View</a></li>
          <li><a href="#"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>

      <li class="treeview @if(isset($activeBooks)) {{ $activeBooks }} @endif">
        <a href="#">
          <i class="fa fa-book"></i> <span>Books</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('book.create') }}"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="{{ route('book.index') }}"><i class="fa fa-search"></i> View</a></li>
          <li><a href="#"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>

      <li class="treeview @if(isset($activeReviews)) {{ $activeReviews }} @endif">
        <a href="#">
          <i class="fa fa-tags"></i> <span>Book Reviews</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="#"><i class="fa fa-search"></i> View</a></li>
          <li><a href="#"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>

      <li class="treeview @if(isset($activeSellers)) {{ $activeSellers }} @endif">
        <a href="#">
          <i class="fa fa-graduation-cap"></i> <span>Best Sellers</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-edit"></i> Add</a></li>
          <li><a href="#"><i class="fa fa-search"></i> View</a></li>
          <li><a href="#"><i class="fa fa-trash"></i> Trash</a></li>
        </ul>
      </li>
      @endif
      <hr>
      <hr>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
