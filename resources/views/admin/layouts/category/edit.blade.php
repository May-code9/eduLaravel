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
        General Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Forms</li>
      </ol>
    </section>

    <div class="col-md-10 col-md-push-1" style="padding-left:0px">
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
        <!-- left column -->
        <div class="col-md-10 col-md-push-1">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Edit Book Category</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/bookCategory/{{ $bookCategory->id }}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('book_category') ? ' has-error' : '' }}">
                  <label>Name of Category</label>
                  <input type="text" class="form-control" name="book_category" id="book_category" value="{{ $bookCategory->book_category }}" placeholder="Enter ..." required/>
                  @if ($errors->has('book_category'))
                  <span class="help-block">
                    <strong>{{ $errors->first('book_category') }}</strong>
                  </span>
                  @endif
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

              </div>
              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-warning btn-lg glyphicon glyphicon-floppy-disk"/>
              </div>
            </form>
            <form action="/bookCategory/{{ $bookCategory->id }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}

              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-danger btn-lg glyphicon glyphicon-trash pull-right"> Trash</button>
              </div>
            </form>
          </div><!-- /.box -->
        </div><!--/.col (left) -->
        <!-- right column -->

      </div>   <!-- /.row -->
    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

@endsection
