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
              <h3 class="box-title">Add Book</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('book_name') ? ' has-error' : '' }}">
                  <label>Book Title</label>
                  <input type="text" name="book_name" class="form-control" placeholder="Enter..." required/>
                  @if ($errors->has('book_name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('book_name') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('week_no') ? ' has-error' : '' }}">
                  <label>Author</label>
                  <select type="text" class="form-control" name="author_id" id="author_id" required>
                    <option value="">Select the Author's Name</option>
                    @foreach($getAuthors as $getAuthor)
                    <option value="{{ $getAuthor->id }}">{{ $getAuthor->author_name }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('author_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('author_id') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('about_book') ? ' has-error' : '' }}">
                  <label>About Book</label>
                  <!-- tools box -->
                  <textarea id="editor1" name="about_book" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                  @if ($errors->has('about_book'))
                  <span class="help-block">
                    <strong>{{ $errors->first('about_book') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('book_category_id') ? ' has-error' : '' }}">
                  <label>Book Category</label>
                  <select type="text" class="form-control" name="book_category_id" id="book_category_id" required>
                    <option value="">Select the Book Category</option>
                    @foreach($getBookCategories as $getBookCategory)
                    <option value="{{ $getBookCategory->id }}">{{ $getBookCategory->book_category }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('book_category_id'))
                  <span class="help-block">
                    <strong>{{ $errors->first('book_category_id') }}</strong>
                  </span>
                  @endif
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

                <div class="form-group{{ $errors->has('book_pdf') ? ' has-error' : '' }}">
                  <label>Book PDF</label>
                  <input type="file" name="book_pdf" id="book_pdf" required>
                  @if ($errors->has('book_pdf'))

                  <span class="help-block">
                    <strong>{{ $errors->first('book_pdf') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('book_image') ? ' has-error' : '' }}" style="display: none">
                  <label>Book Image</label>
                  <input type="file" name="book_image" value="{{ old('book_image') }}">
                  <p style="padding-left:10px">Image ratio (width/height): 2.0 or It's Equivalent Ratio</p>
                  @if ($errors->has('book_image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('book_image') }}</strong>
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
