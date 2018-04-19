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

    <div class="col-md-12" style="padding-left:0px">
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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Authors</h3>
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
                @forelse($getAuthors as $getAuthor)
                <tbody>
                  <tr>
                    <td>{{ $getAuthor->id }}</td>
                    <td>{{ $getAuthor->author_name }}</td>
                    <td>{!! $getAuthor->shortMessage !!}</td>
                    <td class="center"><a href="/edit Author Image/{{ $getAuthor->id }}"><img src="{{ asset('images/authors/' . $getAuthor->author_image) }}" width="50" height="50"></a></td>
                    <td>{{ $getAuthor->first_name }} {{ $getAuthor->last_name }}</td>
                    <td class="center"><a href="/author/{{ $getAuthor->id }}/edit" id="edit" class="btn btn-md btn-primary mr-2" >Edit</a></td>
                  </tr>

                </tbody>
                @empty
                <h1 style="text-align:center">Author Table is empty</h1>
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
