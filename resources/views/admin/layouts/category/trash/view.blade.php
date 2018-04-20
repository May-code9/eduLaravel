@extends('admin.base')
@section('content')

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar.bookshop')


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

    <div class="col-md-8 col-md-push-2" style="padding-left:0px">
      @if(session('success_status'))
      <div class = "alert alert-success alert-dismissable">
        <i class="fa fa-check"></i>
        {{session('success_status')}}
      </div>
      @endif

      @if(session('failure_status'))
      <div class = "alert alert-warning alert-dismissable">
        <i class="fa fa-warning"></i>
        {{session('failure_status')}}
      </div>
      @endif
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8 col-md-push-2">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Trashed Book Category</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Book Category</th>
                    <th>Admin Editor</th>
                    <th></th>
                  </tr>
                </thead>
                @forelse($getBookCategories as $getBookCategory)
                <tbody>
                  <tr>
                    <td>{{ $getBookCategory->id }}</td>
                    <td>{{ $getBookCategory->book_category }}</td>
                    <td>{{ $getBookCategory->first_name }} {{ $getBookCategory->last_name }}</td>
                    <td class="center"><a href="/trashedBookCategory/{{ $getBookCategory->id }}/edit" id="edit" class="btn btn-md btn-primary mr-2" >Edit</a></td>
                  </tr>

                </tbody>
                @empty
                <h1 style="text-align:center">Trashed Book Category Table is empty</h1>
                @endforelse
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Book Category</th>
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
