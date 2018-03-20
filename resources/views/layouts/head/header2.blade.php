<!-- Page-->
<div class="page text-center">
  <!-- Page Header-->
  <header class="page-head">
    <!-- RD Navbar Transparent-->
    <div class="rd-navbar-wrap">
      <nav data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="210" data-xl-stick-up-offset="85" class="rd-navbar rd-navbar-default" data-lg-auto-height="true" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
        <div class="rd-navbar-inner">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
            <h4 class="panel-title veil-md">@yield('title')</h4>
            <!-- RD Navbar Right Side Toggle-->
            <button data-rd-navbar-toggle=".rd-navbar-top-panel" class="rd-navbar-top-panel-toggle veil-md"><span></span></button>
            <div class="rd-navbar-top-panel">
              <div class="rd-navbar-top-panel-left-part">
                <ul class="list-unstyled">
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi fa-phone text-middle"></span></div>
                      <div class="unit-body">
                        <a href="callto:#">{{ config('app.number') }} |</a>
                        <a href="callto:#" class="reveal-block reveal-md-inline-block">{{ config('app.number2') }}</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi fa-map-marker text-middle"></span></div>
                      <div class="unit-body"><a href="#">{{ config('app.location') }}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left">
                        <span class="icon mdi fa-envelope-o text-middle"></span>
                      </div>
                      <div class="unit-body">
                        <a href="#">{{ config('app.email') }}</a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="rd-navbar-top-panel-right-part">
                <div class="rd-navbar-top-panel-left-part">
                  <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                    <div class="unit-left"><span class="icon mdi fa-sign-in text-middle"></span></div>
                    <div class="unit-body"><a href="{{ route('login') }}">Login/Register</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="rd-navbar-menu-wrap clearfix">
            <!--Navbar Brand-->
            <div class="rd-navbar-brand" style="float: left">
              <a href="{{ route('edu_home') }}" class="reveal-inline-block">
                <div class="unit unit-xs-middle unit-lg unit-lg-horizontal unit-spacing-xxs">
                  <div class="unit-left">
                    <img width='120' height='130' src='images/Logo-black.png' alt=''/>
                  </div>
                  <div class="unit-body text-lg-left">
                    <div class="rd-navbar-brand-title" style="font-size:42px; color:#a81a1a;margin-top: 23px;">{{ config('app.name') }}</div>
                    <div class="rd-navbar-brand-slogan"></div>
                  </div>
                </div>
              </a>
            </div>
            @include('layouts.head.nav')
          </div>
        </div>
      </nav>
    </div>
  </header>

  <section class="breadcrumb-classic context-dark" style="background: #442b2b;">
    <div class="shell section-30">
      <!-- <h1 class="veil reveal-sm-block">@yield('title')</h1> -->
      <div class="">
        <ul class="list-inline list-inline-lg list-inline-dashed p">
          <li><a href="{{ route('edu_home') }}">Home</a></li>
          <li><a href="#" style="font-size:20px">@yield('title')</a></li>
        </ul>
      </div>
    </div>
  </section>
