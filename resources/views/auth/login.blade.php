@extends('layouts.base')

@section('title')
Login | Sign Up
@endsection

@section('content')

<main class="page-content section-70 section-md-70">
  <!--Section Login Register-->
  <section class="section-98 section-sm-110 section-bottom-66">
    <div class="shell">
      <div class="range range-xs-center section-34">
        <div class="cell-xs-8 cell-sm-6 cell-md-4">
          <h2 class="text-bold">{{ __('Login') }} | Sign Up</h2>
          <hr class="divider bg-madison">
          <div class="offset-sm-top-45 text-center">
            <!-- Responsive-tabs-->
            <div data-type="horizontal" class="responsive-tabs responsive-tabs-classic horizontal">
              <ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default">
                <li>{{ __('Login') }}</li>
                <li>{{ __('Registration') }}</li>
              </ul>
              <div data-group="tabs-group-default" class="resp-tabs-container text-sm-left tabs-group-default">
                <div>
                  <!-- RD Mailform-->
                  <form class="text-left" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="form-label form-label-outside">E-Mail Address</label>
                      <input id="email" type="email" class="form-control bg-white" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>

                    <div class="form-group offset-top-15{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="form-label form-label-outside">Password</label>
                      <input id="password" type="password" class="form-control bg-white" name="password" required>

                      @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>

                    <div class="offset-top-20">
                      <button type="submit" class="btn btn-primary reveal-block reveal-lg-inline-block">Login</button>
                      <span class="inset-lg-left-20 text-middle small reveal-inline-block offset-top-20 offset-lg-top-0">or enter with</span>
                      <ul class="list-inline list-inline-xs list-inline-madison reveal-lg-inline-block inset-lg-left-10 inset-xl-left-20 text-middle offset-top-15 offset-lg-top-0">
                        <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
                      </ul>
                      <a class="btn btn-link" href="{{ route('password.request') }}" style="padding-left: 70px; font-size:15px">
                        Forgot Your Password?
                      </a>
                    </div>

                  </form>
                </div>
                <div>
                  <!-- RD Mailform-->
                  <form class="text-left" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                      <label for="first_name" class="form-label form-label-outside">First Name:</label>
                      <input id="first_name" type="text" class="form-control bg-white" name="first_name" value="{{ old('first_name') }}" required >

                      @if ($errors->has('first_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                      @endif
                    </div>

                    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                      <label for="last_name" class="form-label form-label-outside">Last Name:</label>
                      <input id="last_name" type="text" class="form-control bg-white" name="last_name" value="{{ old('last_name') }}" required >

                      @if ($errors->has('last_name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('nalast_nameme') }}</strong>
                      </span>
                      @endif
                    </div>

                    <div class="form-group offset-top-15{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="form-label form-label-outside">E-Mail:</label>
                      <input id="email" type="email" class="form-control bg-white" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                      @endif
                    </div>

                    <div class="form-group offset-top-15{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="form-label form-label-outside">Password:</label>
                      <input id="password" type="password" class="form-control bg-white" name="password" required>

                      @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                      @endif
                    </div>

                    <input id="role" type="hidden" class="form-control bg-white" name="role" value="{{ 0 }}" >

                    <div class="form-group offset-top-15">
                      <label for="password-confirm" class="form-label form-label-outside">Confirm Password:</label>
                      <input id="password-confirm" type="password" class="form-control bg-white" name="password_confirmation" required>
                    </div>

                    <div class="offset-top-20">
                      <button type="submit" class="btn btn-primary">
                        Register
                      </button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Page Footer-->
<!-- Corporate footer-->

@endsection
