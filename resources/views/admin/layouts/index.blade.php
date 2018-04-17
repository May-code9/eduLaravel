@extends('admin.base')
@section('content')

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  @if(Route::currentRouteName() == 'dashboard')
  @include('admin.layouts.sidebar.leftbar')
  @elseif(Route::currentRouteName() == 'admin.classroom')
  @include('admin.layouts.sidebar.classroom')
  @elseif(Route::currentRouteName() == 'admin.bookshop')
  @include('admin.layouts.sidebar.bookshop')
  @endif

  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @if(Route::currentRouteName() == 'dashboard')
        Dashboard
        @elseif(Route::currentRouteName() == 'admin.classroom')
        Classroom
        @elseif(Route::currentRouteName() == 'admin.bookshop')
        Bookshop
        @endif
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        @if(Route::currentRouteName() == 'dashboard')
        <li class="active">Dashboard</li>
        @elseif(Route::currentRouteName() == 'admin.classroom')
        <li class="active">Classroom</li>
        @elseif(Route::currentRouteName() == 'admin.bookshop')
        <li class="active">Bookshop</li>
        @endif
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                ---
              </h3>
              <p>
                User Id
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div><!-- ./col --> <!-- User Id -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                ---
              </h3>
              <p>
                Users
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div><!-- ./col --> <!-- Subscribers -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>
                ---
              </h3>
              <p>
                Courses
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div><!-- ./col --> <!-- Courses -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>
                ---
              </h3>
              <p>
                Course Contents
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div><!-- ./col --> <!-- Events -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                ---
              </h3>
              <p>
                Instructors
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div><!-- ./col --> <!-- News -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                ---
              </h3>
              <p>
                Products
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div><!-- ./col --> <!-- User Id -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                ---
              </h3>
              <p>
                Read Message(s)
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div><!-- ./col --> <!-- Subscribers -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>
                ---
              </h3>
              <p>
                UnRead Messages
              </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div><!-- ./col --> <!-- Courses -->

      </div><!-- /.row -->
      <!-- top row -->
      <div class="row">
        <div class="col-xs-12 connectedSortable">

        </div><!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->

    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

@endsection
