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
              <h3 class="box-title">Edit School</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/school/{{ $school->id }}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>Name of School</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ $school->name }}" placeholder="Enter ..." required/>
                  @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('locations') ? ' has-error' : '' }}">
                  <label>Location(s)</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="locations" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $school->locations }}</textarea>
                  @if ($errors->has('locations'))
                  <span class="help-block">
                    <strong>{{ $errors->first('locations') }}</strong>
                  </span>
                  @endif
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

                <div class="form-group{{ $errors->has('founded') ? ' has-error' : '' }}">
                  <label>Date Founded</label>
                  <input type="text" id="date" class="form-control" value="{{ $school->time }}" >
                  <a class="btn btn-success btn-md" id="editBtn"> Edit</a>
                  <input type="date" id="changeDate" class="form-control" name="founded" style="display:none"/>
                  @if ($errors->has('founded'))
                  <span class="help-block">
                    <strong>{{ $errors->first('founded') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label>Name of Founder</label>
                  <input type="text" class="form-control" name="founder" id="founder" value="{{ $school->founder }}" placeholder="Enter ..." required/>
                  @if ($errors->has('founder'))
                  <span class="help-block">
                    <strong>{{ $errors->first('founder') }}</strong>
                  </span>
                  @endif
                </div>

              </div>
              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-warning btn-lg glyphicon glyphicon-floppy-disk"/>
              </div>
            </form>
            <form action="/school/{{ $school->id }}" method="POST">
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
