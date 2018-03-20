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
        General Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('ronchoDashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Forms</li>
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
      <div class = "alert alert-danger">
        <i class="fa fa-check"></i>
        {{session('failure_status')}}
      </div>
      @endif
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-push-2">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Add News</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                  <label>News Title</label>
                  <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" placeholder="Enter ..." />
                  @if ($errors->has('title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                  <label>News Category </label>
                  <input type="text" class="form-control" name="category" id="category" placeholder="Enter ..." />
                  @if ($errors->has('category'))
                  <span class="help-block">
                    <strong>{{ $errors->first('category') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                  <label>News Details</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="content" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('content'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
                  <label>News Author </label>
                  <input type="text" class="form-control" name="author" id="author" placeholder="Enter ..." />
                  @if ($errors->has('author'))
                  <span class="help-block">
                    <strong>{{ $errors->first('author') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                  <label>News Image</label>
                  <input type="file" name="image" id="image" value="{{ old('image') }}">
                  <p style="padding-left:10px">Image Size: 790X420 or It's Equivalent Ratio</p>
                  @if ($errors->has('image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="box-footer col-md-12">
                <input type = "submit" name = "add_news" value = "Add" class = "btn btn-success" />
                <input type = "submit" name = "delete_news" value = "Delete" class = "btn btn-success" style="float:right"/>
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
