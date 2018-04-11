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
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
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

    <section class="content">
      <div class="row">
        <div class="col-md-8 col-md-push-2">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Search by Content Week and Number</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <form method="post" action="{{ route('search.content') }}">
                {{ csrf_field() }}
                <div class="box-body ">
                  <div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                    <label>Course</label>
                    <!-- tools box -->
                    <select type="text" class="form-control" name="course" id="course" required>
                      <option value="">Select the Course Title</option>
                      @foreach($courseIds as $courseId)
                      <option value="{{ $courseId->id }}">{{ $courseId->course }}</option>
                      @endforeach
                    </select>
                    @if ($errors->has('course'))
                    <span class="help-block">
                      <strong>{{ $errors->first('course') }}</strong>
                    </span>
                    @endif
                  </div>

                    <div class="form-group{{ $errors->has('content_week') ? ' has-error' : '' }} col-md-6">
                      <label>Week Number</label>
                      <!-- tools box -->
                      <select type="text" class="form-control" name="content_week" id="content_week" required>
                        <option value="">Select the Week Number</option>
                        @for($i = 0; $i < count(noOfWeeks()); $i++)
                        <option value="{{ noOfWeeks()[$i] }}">{{ noOfWeeks()[$i] }}</option>
                        @endfor
                      </select>
                      @if ($errors->has('content_week'))
                      <span class="help-block">
                        <strong>{{ $errors->first('content_week') }}</strong>
                      </span>
                      @endif
                    </div>

                    <div class="form-group{{ $errors->has('content_number') ? ' has-error' : '' }} col-md-6">
                      <label>Content Number</label>
                      <!-- tools box -->
                      <select type="text" class="form-control" name="content_number" id="content_number">
                        <option value="">Select the Content Number</option>
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

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Content </h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Course Title</th>
                    <th>Content Title</th>
                    <th>Content Details</th>
                    <th>PDF</th>
                    <th>Video</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Week No</th>
                    <th>Admin Editor</th>
                    <th></th>
                  </tr>
                </thead>
                @forelse($getContents as $getContent)
                <tbody>
                  <tr>
                    <td>{{ $getContent->id }}</td>
                    <td>{{ $getContent->course }}</td>
                    <td>{{ $getContent->content_title }}</td>
                    <td>{!! $getContent->shortContent !!}</td>
                    <td><a href="/edit Content Pdf/{{ $getContent->id }}" title="{{ $getContent->content_pdf }}">{{ $getContent->shortPdf }}</a></td>
                    @if(is_null($getContent->content_video))
                    <td>No Video</td>
                    @else
                    <td><a href="/edit Content Video/{{ $getContent->id }}">
                      <video width="200" height="150">
                       <source src="{{ asset('video/' . $getContent->content_video) }}" type="video/mp4">
                      </video></a>
                    </td>
                    @endif
                    @if(is_null($getContent->content_image))
                    <td>No Image</td>
                    @else
                    <td class="center"><a href="/edit Content Image/{{ $getContent->id }}"><img src="{{ asset('images/content/' . $getContent->content_image) }}" width="50" height="50"></a></td>
                    @endif
                    <td>{{ $getContent->category }}</td>
                    <td>{{ $getContent->week_no }}</td>
                    <td>{{ $getContent->first_name }} {{ $getContent->last_name }}</td>
                    <td class="center"><a href="/content/{{ $getContent->id }}/edit" id="edit" class="btn btn-md btn-primary mr-2" >Edit</a></td>
                  </tr>

                </tbody>
                @empty
                <h1 style="text-align:center">Course Table is empty</h1>
                @endforelse
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Course Title</th>
                    <th>Content Title</th>
                    <th>Content Details</th>
                    <th>PDF</th>
                    <th>Video</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Week No</th>
                    <th>Admin Editor</th>
                    <th></th>
                  </tr>
                </tfoot>
              </table>

            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
      </div>

    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
@endsection
