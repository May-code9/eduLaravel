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
              <h3 class="box-title">Restore/Delete Book</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/trashedBook/{{ $book->id }}">
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group{{ $errors->has('book_name') ? ' has-error' : '' }}">
                  <label>Book Title</label>
                  <input type="text" name="book_name" class="form-control" value="{{ $book->book_name }}" placeholder="Enter..." disabled/>
                  @if ($errors->has('book_name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('book_name') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('author_name') ? ' has-error' : '' }}">
                  <label>Author</label>
                  <select type="text" class="form-control" name="author_id" id="author_id" disabled>
                    <option value="{{ $book->author_id }}">{{ $book->author_name }}</option>
                    <option value="" disabled>Select the Author's Name</option>
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
                  <textarea id="editor1" name="about_book" placeholder="Enter ..." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled>{{ $book->about_book }}</textarea>
                  @if ($errors->has('about_book'))
                  <span class="help-block">
                    <strong>{{ $errors->first('about_book') }}</strong>
                  </span>
                  @endif
                </div>

                <div class="form-group{{ $errors->has('book_category_id') ? ' has-error' : '' }}">
                  <label>Book Category</label>
                  <select type="text" class="form-control" name="book_category_id" id="book_category_id" disabled>
                    <option value="{{ $book->book_category_id }}">{{ $book->book_category }}</option>
                    <option value="" disabled>Select the Book Category</option>
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

                <div class="form-group{{ $errors->has('book_cost') ? ' has-error' : '' }}">
                  <label>Book Cost</label>
                  <input type="text" name="book_cost" class="form-control" value="{{ $book->book_cost }}" placeholder="Enter..." disabled/>
                  @if ($errors->has('book_cost'))
                  <span class="help-block">
                    <strong>{{ $errors->first('book_cost') }}</strong>
                  </span>
                  @endif
                </div>

                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

              </div>
              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-success btn-lg glyphicon glyphicon-floppy-disk" > Restore</button>
              </div>
            </form>
            <form action="/trashedBook/{{ $book->id }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}

              <div class="box-footer col-md-6">
                <button type = "submit" class="btn btn-danger btn-lg glyphicon glyphicon-trash pull-right"> Delete</button>
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
