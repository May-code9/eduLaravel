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
              <h3 class="box-title">Edit Course</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/course/{{ $course->id }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                  <label>Title of Course</label>
                  <input type="text" class="form-control" name="course" id="course" value="{{ $course->course }}" placeholder="Enter ..." required/>
                  @if ($errors->has('course'))
                  <span class="help-block">
                    <strong>{{ $errors->first('course') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('about_course') ? ' has-error' : '' }}">
                  <label>About Course</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="about_course" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $course->about_course }}</textarea>
                  @if ($errors->has('about_course'))
                  <span class="help-block">
                    <strong>{{ $errors->first('about_course') }}</strong>
                  </span>
                  @endif
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

                <div class="form-group{{ $errors->has('total_weeks') ? ' has-error' : '' }}">
                  <label>Number of Weeks</label>
                  <select type="text" class="form-control" name="total_weeks" id="total_weeks" required>
                    <option value="{{ $course->total_weeks }}">{{ $course->total_weeks }}</option>
                    <option disabled>---------------------------------------</option>
                    @for($i = 0; $i < count(noOfWeeks()); $i++)
                    <option value="{{ noOfWeeks()[$i] }}">{{ noOfWeeks()[$i] }}</option>
                    @endfor
                  </select>
                  @if ($errors->has('total_weeks'))
                  <span class="help-block">
                    <strong>{{ $errors->first('total_weeks') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('instructor_id') ? ' has-error' : '' }}">
                  <label>Course Instructor</label>
                  <select type="text" class="form-control" name="instructor_id" id="instructor_id" required>
                    <option value="{{ $course->instructor_id }}">{{ $course->instructor }}</option>
                    <option disabled>---------------------------------------</option>
                    @foreach($instructor_ids as $instructor_id)
                    <option value="{{ $instructor_id->id }}">{{ $instructor_id->instructor }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('instructor_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('instructor_id') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('school_id') ? ' has-error' : '' }}">
                  <label>School</label>
                  <select type="text" class="form-control" name="school_id" id="school_id" required>
                    <option value="{{ $course->school_id }}">{{ $course->name }}</option>
                    <option disabled>---------------------------------------</option>
                    @foreach($school_ids as $school_id)
                    <option value="{{ $school_id->id }}">{{ $school_id->name }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('school_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('school_id') }}</strong>
                  </span>
                  @endif
                </div>

              </div>
              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-success btn-lg glyphicon glyphicon-floppy-disk" />
              </div>
            </form>
            <form action="/course/{{ $course->id }}" method="POST">
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
