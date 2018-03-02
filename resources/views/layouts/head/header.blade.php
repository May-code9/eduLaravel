<!-- Page-->
<div class="page text-center">
  <!-- Page Header-->
  <header style="position:absolute; left:0; right:0;top:0" class="page-head">
    <!-- RD Navbar Transparent-->
    <div class="rd-navbar-wrap">
      <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="40" class="rd-navbar rd-navbar-transparent" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true" data-md-focus-on-hover="false">
        <div class="rd-navbar-inner">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
            <h4 class="panel-title veil-lg">Home</h4>
          </div>
          <div class="rd-navbar-menu-wrap clearfix">
            <!--Navbar Brand-->
            <div class="rd-navbar-brand">
              <a href="{{ route('edu_home') }}" class="reveal-inline-block">
                <div class="unit unit-xs-middle unit-lg unit-lg-horizontal unit-spacing-xxs">
                  <div class="unit-left">
                    <img width='210' height='230' src='images/logo-white.png' alt='' style="/*! width:210px; height:230px; */" />
                  </div>
                  <div class="unit-body text-lg-left">
                    <div class="rd-navbar-brand-title" style="font-size:42px; color:#a81a1a;margin-top: 23px;">{{ config('app.name') }}</div>
                    <div class="rd-navbar-brand-slogan text-light"></div>
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
