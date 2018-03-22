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
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Edit Instructor</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/instructor/{{ $instructor->id }}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('instructor') ? ' has-error' : '' }}">
                  <label>Name(s) of Instructor(s)</label>
                  <input type="text" class="form-control" name="instructor" id="instructor" value="{{ $instructor->instructor }}" placeholder="Enter ..." required/>
                  @if ($errors->has('instructor'))
                  <span class="help-block">
                    <strong>{{ $errors->first('instructor') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('about_instructor') ? ' has-error' : '' }}">
                  <label>About Instructor(s)</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="about_instructor" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $instructor->about_instructor }}</textarea>
                  @if ($errors->has('about_instructor'))
                  <span class="help-block">
                    <strong>{{ $errors->first('about_instructor') }}</strong>
                  </span>
                  @endif
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

                <div class="form-group{{ $errors->has('instructor_image') ? ' has-error' : '' }}">
                  <label>Instructor's Image</label>
                  <input type="file" name="instructor_image" id="instructor_image" value="" required>
                  <p style="padding-left:10px">Image ratio: 1.0 or It's Equivalent Ratio</p>
                  @if ($errors->has('instructor_image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('instructor_image') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-warning btn-lg glyphicon glyphicon-floppy-disk"/>
              </div>
            </form>
            <form action="/instructor/{{ $instructor->id }}" method="POST">
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
