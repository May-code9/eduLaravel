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

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Edit Book Image</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form method="post" action="/edit Book Pdf/{{ $book->id }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>

                <div class="form-group">
                  <p>Book's Current PDF</p>
                  <embed src="{{ asset('pdf/' . $book->book_pdf) }}" type="application/pdf" width="100%" height="350px"/>
                </div>

                <div class="form-group{{ $errors->has('book_pdf') ? ' has-error' : '' }}">
                  <label>Change Book's PDF</label>
                  <input type="file" name="book_pdf" id="book_pdf" value="" required>
                  @if ($errors->has('book_pdf'))
                  <span class="help-block">
                    <strong>{{ $errors->first('book_pdf') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="box-footer col-md-12">
                <button type = "submit" class="btn btn-warning btn-lg glyphicon glyphicon-floppy-disk"/>
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
