@extends('admin.base')
@section('content')

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar.leftbar')

  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" style="text-align:center">
              <h4 >Role = 1 means Approved, Role = 0 means Not Approved</h4>
              <h5 >Only Approved Testimonies will show on The Home Page </h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Message Table</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Email</th>
                  </tr>
                </thead>
                @for($i = 0; $i < count($messages); $i++)
                <tbody>
                  <tr>
                    <td>{{ $messages[$i]->id }}</td>
                    <td>{{ $messages[$i]->name }}</td>
                    <td>{{ $messages[$i]->subject }}</td>
                    <td>{!! $messages[$i]->content !!}</td>
                    <td>{{ $messages[$i]->email }}</td>
                  </tr>
                </tbody>
                @endfor
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Email</th>
                  </tr>
                </tfoot>
              </table>
              {{ $messages->links() }}
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
      </div>

    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

@endsection
