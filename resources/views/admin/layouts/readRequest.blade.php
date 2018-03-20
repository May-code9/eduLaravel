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
        General Form
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('ronchoDashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Forms</li>
      </ol>
    </section>

    <div class="col-md-8 col-md-push-2" style="padding-left:0px">
      @if(session('success_status'))
      <div class = "alert alert-success">
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
        <div class="col-md-8 col-md-push-2">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Products</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="/readrequestform/{{$getFullMessage->id}}" >
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label>Client Name</label>
                  <input type="text" class="form-control" value="{{ $getFullMessage->first_name }} {{ $getFullMessage->last_name }}" disabled/>
                </div>

                <div class="form-group col-md-6">
                  <label>Client Phone Number</label>
                  <input type="text" class="form-control" value="{{ $getFullMessage->phone_number }}" disabled/>
                </div>

                <div class="form-group col-md-6">
                  <label>Product Name</label>
                  <input type="text" class="form-control" value="{{ $getFullMessage->product }}" disabled/>
                </div>

                <div class="form-group col-md-6">
                  <label>Messsage Time</label>
                  <input type="text" class="form-control" value="{{ $getFullMessage->time }}" disabled/>
                </div>
                <input type="hidden" class="form-control" name="user_id" value="{{ $getFullMessage->user_id }}" />
                <input type="hidden" class="form-control" name="product" value="{{ $getFullMessage->product }}" />
                <input type="hidden" class="form-control" name="read" value="0" />
                <input type="hidden" class="form-control" name="id" value="{{ $getFullMessage->id }}" />

                <div class="form-group">
                  <label>Message</label>
                  <!-- tools box -->
                  <textarea name="message" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;color:black;background-color:transparent" disabled>{{ $getFullMessage->message }}</textarea>
                </div>
              </div>
              <div class="box-footer">
                <input type = "submit" name = "edit" value = "Mark As UnRead" class = "btn btn-success" />
                <input type = "submit" name = "delete" value = "Delete" class = "btn btn-warning" style="float:right"/>
              </div>

            </form>
          </div><!-- /.box -->
        </div><!--/.col (left) -->
        <!-- right column -->

      </div>   <!-- /.row -->
    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->
@if (session('alert'))
    {!! session('alert') !!}
@endif
@endsection
