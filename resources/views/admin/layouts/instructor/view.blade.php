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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Instructors</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Admin Editor</th>
                    <th></th>
                  </tr>
                </thead>
                @forelse($getInstructors as $getInstructor)
                <tbody>
                  <tr>
                    <td>{{ $getInstructor->id }}</td>
                    <td>{{ $getInstructor->instructor }}</td>
                    <td>{!! $getInstructor->about_instructor !!}</td>
                    <td class="center"><img src="{{ asset('images/instructors/' . $getInstructor->instructor_image) }}" width="50" height="50"></td>
                    <td>{{ $getInstructor->first_name }} {{ $getInstructor->last_name }}</td>
                    <td class="center"><a href="#" id="edit" class="btn btn-sm btn-primary mr-2">Edit</a></td>
                  </tr>

                </tbody>
                @empty
                <h1 style="text-align:center">Instructor Table is empty</h1>
                @endforelse
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Admin Editor</th>
                    <th></th>
                  </tr>
                </tfoot>
              </table>

            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
      </div>

    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
@endsection
