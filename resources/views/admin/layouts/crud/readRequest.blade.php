@extends('admin.base')
@section('content')

<div class="wrapper row-offcanvas row-offcanvas-left">
  @include('admin.layouts.sidebar.leftbar')
  <!-- Right side column. Contains the navbar and content of the page -->
  <aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header no-margin">
      <h1 class="text-center">
        Requests
      </h1>
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
      <!-- MAILBOX BEGIN -->
      <div class="mailbox row">
        <div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-body">
              <div class="row">
                <div class="col-md-3 col-sm-4">
                  <!-- BOXES are complex enough to move the .box-header around.
                  This is an example of having the box header within the box body -->
                  <div class="box-header">
                    <i class="fa fa-inbox"></i>
                    <h3 class="box-title">INBOX</h3>
                  </div>
                  <!-- compose message btn -->
                  <!-- <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i> Compose Message</a> -->
                  <!-- Navigation - folders-->
                  <div style="margin-top: 15px;">
                    <ul class="nav nav-pills nav-stacked">
                      <li class="header">Folders</li>
                      <li class=""><a href="{{ route('requestform.index') }}"><i class="fa fa-inbox"></i> Unread ({{ $countRequest }})</a></li>
                      <li class="active"><a href="#"><i class="fa fa-inbox"></i> Read ({{ $countReadRequest }})</a></li>
                    </ul>
                  </div>
                </div><!-- /.col (LEFT) -->
                <div class="col-md-9 col-sm-8">
                  <div class="row pad">
                    <div class="col-sm-6">
                      <!-- <label style="margin-right: 10px;">
                        <input type="checkbox" id="check-all"/>
                      </label> -->
                      <!-- Action button -->
                      <!-- <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                          Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Mark as read</a></li>
                          <li><a href="#">Mark as unread</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Move to junk</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Delete</a></li>
                        </ul>
                      </div> -->

                    </div>
                    <!-- <div class="col-sm-6 search-form">
                      <form action="#" class="text-right">
                        <div class="input-group">
                          <input type="text" class="form-control input-sm" placeholder="Search">
                          <div class="input-group-btn">
                            <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div> -->
                  </div><!-- /.row -->

                  <div class="table-responsive">
                    <!-- THE MESSAGES -->
                    <table class="table table-mailbox">
                      @forelse($getMessages as $getMessage)
                      <tr>
                        <td class="small-col"><input type="checkbox" /></td>
                        <td class="small-col"><a href="#"><i class="fa fa-star-o"></i></a></td>
                        <td class="name"><a href="#">{{ $getMessage->first_name }} {{ $getMessage->last_name }}</a></td>
                        <td class="subject"><a href="/readrequestform/{{ $getMessage->id }}/edit">{{ $getMessage->shortMessage }}</a></td>
                        <td class="time">{{ $getMessage->time }}</td>
                      </tr>
                      @empty
                      <h1 style="text-align:center">No Messages Yet</h1>
                      @endforelse
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.col (RIGHT) -->
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
              <div class="pull-right">
                {{ $getMessages->links() }}
              </div>
            </div><!-- box-footer -->
          </div><!-- /.box -->
        </div><!-- /.col (MAIN) -->
      </div>
      <!-- MAILBOX END -->

    </section><!-- /.content -->
  </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- COMPOSE MESSAGE MODAL -->
<!-- <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Compose New Message</h4>
      </div>
      <form action="#" method="post">
        <div class="modal-body">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">TO:</span>
              <input name="email_to" type="email" class="form-control" placeholder="Email TO">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">CC:</span>
              <input name="email_to" type="email" class="form-control" placeholder="Email CC">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">BCC:</span>
              <input name="email_to" type="email" class="form-control" placeholder="Email BCC">
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
          </div>
          <div class="form-group">
            <div class="btn btn-success btn-file">
              <i class="fa fa-paperclip"></i> Attachment
              <input type="file" name="attachment"/>
            </div>
            <p class="help-block">Max. 32MB</p>
          </div>

        </div>
        <div class="modal-footer clearfix">

          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

          <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Send Message</button>
        </div>
      </form>
    </div>
  </div>
</div> -->
@endsection
