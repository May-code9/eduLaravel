@extends('admin.base')
@section('content')

<div class="wrapper row-offcanvas row-offcanvas-left">
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.layouts.sidebar.classroom')


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

    <div class="col-md-6 col-md-push-3" style="padding-left:0px">
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
        <div class="col-md-6 col-md-push-3">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Select Content Number</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <form method="post" action="{{ route('content.view') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body ">
                  <div class="form-group{{ $errors->has('content_number') ? ' has-error' : '' }}">
                    <label>Content Number</label>
                    <!-- tools box -->
                    <select type="text" class="form-control" name="content_number" id="content_number" required>
                      <option value="">Select the Content number to view table</option>
                      @for($i = 0; $i < count(courseNo()); $i++)
                      <option value="{{ noOfWeeks()[$i] }}">{{ courseNo()[$i] }}</option>
                      @endfor
                    </select>
                    @if ($errors->has('content_number'))
                    <span class="help-block">
                      <strong>{{ $errors->first('content_number') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="box-footer">
                  <button type = "submit" class="btn btn-success btn-lg glyphicon glyphicon-floppy-disk" />
                </div>
              </form>

            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
      </div>

    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
@endsection
