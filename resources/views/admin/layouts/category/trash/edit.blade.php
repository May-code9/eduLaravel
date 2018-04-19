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
              <h3 class="box-title">Restore/Delete Author</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/trashedAuthor/{{ $author->id }}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('author_name') ? ' has-error' : '' }}">
                  <label>Name of Author</label>
                  <input type="text" class="form-control" name="author_name" id="author_name" value="{{ $author->author_name }}" placeholder="Enter ..." disabled/>
                  @if ($errors->has('author_name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('author_name') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('about_author') ? ' has-error' : '' }}">
                  <label>About Author</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="about_author" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled>{{ $author->about_author }}</textarea>
                  @if ($errors->has('about_author'))
                  <span class="help-block">
                    <strong>{{ $errors->first('about_author') }}</strong>
                  </span>
                  @endif
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

              </div>
              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-warning btn-lg glyphicon glyphicon-floppy-disk"/>
              </div>
            </form>
            <form action="/trashedAuthor/{{ $author->id }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}

              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-danger btn-lg glyphicon glyphicon-trash pull-right"> Delete</button>
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
