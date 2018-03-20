<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>{{config('app.name')}} | Dashboard</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link href="css/html.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  @include('admin.links.index')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body class="skin-black">
  <!-- header logo: style can be found in header.less -->
  <header class="header">
    <a href="/dashboard" class="logo">
      <!-- Add the class icon to your logo image or logo icon to add the margining -->
      {{config('app.shortName')}}
    </a>
    @include("admin.layouts.sidebar.header")
  </header>

  @yield('content')

  @if(Route::currentRouteName() == 'news.create' || Route::currentRouteName() == 'product.create' || Route::currentRouteName() == 'message.show')
  @include('admin.scripts.news')
  @elseif(Route::currentRouteName() == 'message.index')
  @include('admin.scripts.mail')
  @else
  @include('admin.scripts.index')
  @endif
</body>
</html>
