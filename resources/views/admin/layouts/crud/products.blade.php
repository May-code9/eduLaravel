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
              <h3 class="box-title">Products</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('product') ? ' has-error' : '' }}">
                  <label>Title of Products</label>
                  <input type="text" class="form-control" name="product" id="product" placeholder="Enter ..." />
                  @if ($errors->has('product'))
                  <span class="help-block">
                    <strong>{{ $errors->first('product') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
                  <label>News Details</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="details" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  @if ($errors->has('details'))
                  <span class="help-block">
                    <strong>{{ $errors->first('details') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                  <label>Image</label>
                  <input type="file" name="image" id="image" >
                  <p style="padding-left:10px">Image Size: 340 x 340</p>
                  @if ($errors->has('image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
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
@if (session('alert'))
    {!! session('alert') !!}
@endif
@endsection
