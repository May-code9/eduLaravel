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
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Edit Course Content Image</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/edit Content Pdf/{{ $content->id }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

                <div class="form-group">
                  <p>Content's Current PDF</p>
                  <embed src="{{ asset('pdf/' . $content->content_pdf) }}" type="application/pdf" width="100%" height="350px"/>
                </div>

                <div class="form-group{{ $errors->has('content_pdf') ? ' has-error' : '' }}">
                  <label>Change Content's PDF</label>
                  <input type="file" name="content_pdf" id="content_pdf" value="" required>
                  <p style="padding-left:10px">Image ratio: 1.0 or It's Equivalent Ratio</p>
                  @if ($errors->has('content_pdf'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content_pdf') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="box-footer col-md-12">
                <button type = "submit" class="btn btn-warning btn-lg glyphicon glyphicon-floppy-disk"/>
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
