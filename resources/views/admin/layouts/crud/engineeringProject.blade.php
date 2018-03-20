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
      <div class = "alert alert-success">
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
              <h3 class="box-title">Engineering Services Project</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('engineering.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                  <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                    <label>Mini Image</label>
                    <input type="file" name="image" id="image" >
                    <p style="padding-left:10px">Image Size: 370 x 220</p>
                    @if ($errors->has('image'))
                    <span class="help-block">
                      <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                  </div>

                  <div class="form-group{{ $errors->has('fullimage') ? ' has-error' : '' }}">
                    <label>Full Image</label>
                    <input type="file" name="fullimage" id="fullimage" >
                    <p style="padding-left:10px">Original Image Size</p>
                    @if ($errors->has('fullimage'))
                    <span class="help-block">
                      <strong>{{ $errors->first('fullimage') }}</strong>
                    </span>
                    @endif
                  </div>

                  <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                    <input type="hidden" class="form-control" name="category" id="category" value="engineering" />
                  </div>
              </div>

              <div class="box-footer">
                <input type = "submit" name = "add_blog" value = "Add" class = "btn btn-success" />
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
