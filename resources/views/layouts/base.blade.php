<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
<head>
  <!-- Site Title-->
  <title>{{ config('app.name') }} | @yield('title')</title>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="keywords" content="intense web design multipurpose template">
  <meta name="date" content="Dec 26">
  <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300i,300,400i,600,700%7CPT+Serif:400,400i,700,700i">
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 10]>
  <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
  <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>
<body>
  @if(Route::currentRouteName() == 'edu_home')
    @include('layouts.head.header')
  @else
    @include('layouts.head.header2')
  @endif

  @yield('content')

  @if(Route::currentRouteName() == 'edu_contact')
    @include('layouts.foot.footer')
  @else
    @include('layouts.foot.footer2')
  @endif
</body><!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');
</script>
<!-- End Google Tag Manager -->
</html>
