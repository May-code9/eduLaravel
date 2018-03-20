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
              <h3 class="box-title">Admin</h3>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form role="form" method="post" action="/adminuser/{{$getAdmin->id}}" >
              {{ method_field('PUT') }}
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label>First Name</label>
                  <input type="text" name="first_name" class="form-control" value="{{ $getAdmin->first_name }}" />
                </div>

                <div class="form-group col-md-6">
                  <label>Last Name</label>
                  <input type="text" name="last_name" class="form-control" value="{{ $getAdmin->last_name }}" />
                </div>

                <div class="form-group col-md-6">
                  <label>Admin Email</label>
                  <input type="email" name="email" class="form-control" value="{{ $getAdmin->email }}" />
                </div>

                <div class="form-group col-md-6">
                  <label>Admin?</label>
                  <select>
                    <option> {{ $getAdmin->role }} </option>
                    <option>-- select --</option>
                    <option value="3">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>

              </div>
              <div class="box-footer">
                <input type = "submit" name = "edit" value = "Mark As Read" class = "btn btn-success" />
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
