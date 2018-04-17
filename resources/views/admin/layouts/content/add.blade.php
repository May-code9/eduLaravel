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
              <h3 class="box-title">Add Course Content</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="{{ route('content.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }}">
                  <label>Title of Course</label>
                  <select type="text" class="form-control" name="course_id" id="course_id" required>
                    <option value="">Select Course Title</option>
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
                  <input type="text" name="content_title" class="form-control" required/>
                  @if ($errors->has('content_title'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content_title') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('week_no') ? ' has-error' : '' }}">
                  <label>Week Number</label>
                  <select type="text" class="form-control" name="week_no" id="week_no" required>
                    <option value="">Select the week number of this content</option>
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
                    <option value="">Select the Content number in the week</option>
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
                  <textarea id="editor1" name="content_text" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                  @if ($errors->has('content_text'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content_text') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                  <label>Category</label>
                  <select type="text" class="form-control" name="category_id" id="category_id" required>
                    <option value="">Select Course Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('category_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('category_id') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('content_pdf') ? ' has-error' : '' }}">
                  <label>Content PDF</label>
                  <input type="file" name="content_pdf" id="content_pdf" value="{{ old('content_pdf') }}" required>
                  <p style="padding-left:10px">Image ratio: 1.0 or It's Equivalent Ratio</p>
                  @if ($errors->has('content_pdf'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content_pdf') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('content_image') ? ' has-error' : '' }}" style="display: none" id="content_image">
                  <label>Content Image</label>
                  <input type="file" name="content_image" value="{{ old('content_image') }}">
                  <p style="padding-left:10px">Image ratio (width/height): 2.0 or It's Equivalent Ratio</p>
                  @if ($errors->has('content_image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content_image') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('content_video') ? ' has-error' : '' }}" style="display: none" id="content_video">
                  <label>Content Video</label>
                  <input type="file" name="content_video" value="{{ old('content_video') }}">
                  <p style="padding-left:10px">Image ratio: 1.0 or It's Equivalent Ratio</p>
                  @if ($errors->has('content_video'))
                  <span class="help-block">
                    <strong>{{ $errors->first('content_video') }}</strong>
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
