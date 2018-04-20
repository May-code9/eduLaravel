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


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Books </h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Book Title</th>
                    <th>Book Details</th>
                    <th>Author</th>
                    <th>PDF</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Cost</th>
                    <th>Admin Editor</th>
                    <th></th>
                  </tr>
                </thead>
                @forelse($getBooks as $getBook)
                <tbody>
                  <tr>
                    <td>{{ $getBook->id }}</td>
                    <td>{{ $getBook->book_name }}</td>
                    <td>{!! $getBook->shortAboutBook !!}</td>
                    <td>{{ $getBook->author_name }}</td>
                    <td><a href="/edit Book Pdf/{{ $getBook->id }}" title="{{ $getBook->book_pdf }}">{{ $getBook->shortPdf }}</a></td>
                    @if(is_null($getBook->book_image))
                    <td>No Image</td>
                    @else
                    <td class="center"><a href="/edit Book Image/{{ $getBook->id }}"><img src="{{ asset('images/books/' . $getBook->book_image) }}" width="50" height="50"></a></td>
                    @endif
                    <td>{{ $getBook->book_category }}</td>
                    <td>{{ $getBook->book_cost }}</td>
                    <td>{{ $getBook->first_name }} {{ $getBook->last_name }}</td>
                    <td class="center"><a href="/book/{{ $getBook->id }}/edit" id="edit" class="btn btn-md btn-primary mr-2" >Edit</a></td>
                  </tr>

                </tbody>
                @empty
                <h1 style="text-align:center">Book Table is empty</h1>
                @endforelse
                <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Book Title</th>
                    <th>Book Details</th>
                    <th>Author</th>
                    <th>PDF</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Cost</th>
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
