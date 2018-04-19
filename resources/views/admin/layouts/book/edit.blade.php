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
              <h3 class="box-title">Edit Course Content</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/content/{{ $getContents->id }}" enctype="multipart/form-data">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
                  <label>Title of Course</label>
                  <select type="text" class="form-control" name="course_id" id="course_id" required>
                    <option value="{{ $getContents->course_id }}">{{ $getContents->course }}</option>
                    <option disabled>---------------------------------------</option>
                    @foreach($courseIds as $courseId)
                    <option value="{{ $courseId->id }}">{{ $courseId->course }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('course_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('course_id') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('content_title') ? ' has-error' : '' }}">
                  <label>Content Title</label>
                  <!-- tools box -->
                  <input type="text" name="content_title" class="form-control" value="{{ $getContents->content_title }}" required/>
                  @if ($errors->has('content_title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content_title') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('week_no') ? ' has-error' : '' }}">
                  <label>Week Number</label>
                  <select type="text" class="form-control" name="week_no" id="week_no" required>
                    <option value="{{ $getContents->week_no }}">{{ $getContents->week_no }}</option>
                    <option disabled>---------------------------------------</option>
                    @for($i = 0; $i < count(noOfWeeks()); $i++)
                    <option value="{{ noOfWeeks()[$i] }}">{{ noOfWeeks()[$i] }}</option>
                    @endfor
                  </select>
                  @if ($errors->has('week_no'))
                  <span class="help-block">
                    <strong>{{ $errors->first('week_no') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('content_number') ? ' has-error' : '' }}">
                  <label>Content Number in Week</label>
                  <!-- tools box -->
                  <select type="text" class="form-control" name="content_number" id="content_number" required>
                    <option value="{{ $getContents->content_number }}">{{ $getContents->content_number }}</option>
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

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

                <div class="form-group{{ $errors->has('content_text') ? ' has-error' : '' }}">
                  <label>Content Text</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="content_text" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $getContents->content_text }}</textarea>
                  @if ($errors->has('content_text'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content_text') }}</strong>
                  </span>
                  @endif
                </div>

              </div>
              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-warning btn-lg glyphicon glyphicon-floppy-disk"/>
              </div>
            </form>
            <form action="/content/{{ $getContents->id }}" method="POST">
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
