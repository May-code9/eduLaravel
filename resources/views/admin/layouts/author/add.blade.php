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
        <div class="col-md-10 col-md-push-1">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Add Author</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="{{ route('author.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('author_name') ? ' has-error' : '' }}">
                  <label>Name of Author</label>
                  <input type="text" class="form-control" name="author_name" id="author_name" value="{{ old('author_name') }}" placeholder="Enter ..." required/>
                  @if ($errors->has('author_name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('author_name') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('about_author') ? ' has-error' : '' }}">
                  <label>About Author</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="about_author" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                  @if ($errors->has('about_author'))
                  <span class="help-block">
                    <strong>{{ $errors->first('about_author') }}</strong>
                  </span>
                  @endif
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

                <div class="form-group{{ $errors->has('author_image') ? ' has-error' : '' }}">
                  <label>Author's Image</label>
                  <input type="file" name="author_image" id="author_image" value="{{ old('author_image') }}" required>
                  <p style="padding-left:10px">Image ratio: 1.0 or It's Equivalent Ratio</p>
                  @if ($errors->has('author_image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('author_image') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="box-footer col-md-12">
                <button type = "submit" class="btn btn-success btn-lg glyphicon glyphicon-floppy-disk" />
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