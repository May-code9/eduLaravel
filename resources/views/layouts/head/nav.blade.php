<!--RD Navbar Search-->
<div class="rd-navbar-search" style="margin-left: 20px;    margin-right: 20px;width: 290px; ">
  <form action="#" method="GET" class="form-search rd-search">
    <div class="form-group">
      <label for="rd-navbar-search-form-input" class="form-label">Find Institutions</label>
      <input id="rd-navbar-search-form-input" type="text" name="search" autocomplete="off" class="form-search-input form-control" style="border-radius: 5px;"/>
      <div id="rd-search-results-live" class="rd-search-results-live"></div>
    </div>
    <button type="submit" class="form-search-submit"><span class="icon fa-search"></span></button>
  </form>
</div>
<div class="rd-navbar-nav-wrap">
  <div class="rd-navbar-mobile-scroll">
    <div class="rd-navbar-mobile-header-wrap">
      <!--Navbar Brand Mobile-->
      <div class="rd-navbar-mobile-brand">
        <a href="{{ route('edu_home') }}">
          <img width='120' height='130' src='images/Logo-white.png' alt=''/>
        </a>
      </div>
    </div>
    <!-- RD Navbar Nav-->
    <ul class="rd-navbar-nav">
      <li class="@if(isset($homeActive)) {{$homeActive}} @endif">
        <a href="{{route('edu_home')}}">Home</a>
      </li>
      <li class="@if(isset($aboutActive)) {{$aboutActive}} @endif">
        <a href="#">Institutions</a>
      </li>
      <li class="@if(isset($schoolActive)) {{$schoolActive}} @endif">
        <a href="#">Classroom</a>
      </li>
      <li class="@if(isset($schoolActive)) {{$schoolActive}} @endif">
        <a href="#">Community</a>
      </li>
      <!-- <li><a href="#">News</a>
        <ul class="rd-navbar-dropdown">
          <li><a href="classic-news.php">Classic news</a>
          </li>
          <li><a href="grid-news.php">Grid News</a>
          </li>
          <li><a href="masonry-news.php">Masonry News</a>
          </li>
          <li><a href="grid-news-3-columns.php">3 Columns Grid News</a>
          </li>
          <li><a href="modern-news.php">Modern News</a>
          </li>
          <li><a href="news-post-page.php">News Post Page</a>
          </li>
        </ul>
      </li> -->
      <!-- <li><a href="#">Gallery</a>
        <ul class="rd-navbar-dropdown">
          <li><a href="grid-gallery.php">Grid Gallery</a>
          </li>
          <li><a href="grid-without-padding-gallery.php">Grid Without Padding Gallery</a>
          </li>
          <li><a href="masonry-gallery.php">Masonry Gallery</a>
          </li>
          <li><a href="cobbles-gallery.php">Cobbles Gallery</a>
          </li>
        </ul>
      </li>
      <li><a href="#">Shop</a>
        <ul class="rd-navbar-dropdown">
          <li><a href="product-catalog.php">Product Catalog</a>
          </li>
          <li><a href="single-product.php">Single Product</a>
          </li>
          <li><a href="shopping-cart.php">Shopping Cart</a>
          </li>
          <li><a href="checkout.php">Checkout</a>
          </li>
        </ul>
      </li>
      <li><a href="donate.php">Donate</a>
      </li> -->
      <!-- <li><a href="{{ route('edu_contact') }}">Contacts</a>
      </li>-->
      @if(Auth::guest())
      <li class="@if(isset($loginActive)) {{ $loginActive }} @endif">
        <a href="{{ route('login') }}">Login | Sign Up</a>
      </li>
      @elseif(Auth::user()->role == 4)
      <li class="">
        <a href="#"> {{ Auth::user()->first_name }}</a>
        <ul class="rd-navbar-dropdown">
          <li><a href="">Dashboard</a></li>
          <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
          <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          </li>
        </ul>
      </li>
      @else
      <li class="">
        <a href="">{{ Auth::user()->first_name }}</a>
        <ul class="rd-navbar-dropdown">
          <li><a href="{{route('logout')}}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
          </li>
        </ul>
      </li>
      @endif
      <!-- <li class="veil-lg"><a href="shopping-cart.php">Shopping Cart (2)</a></li> -->
    </ul>
    <!--RD Navbar Mobile Search-->
    <div id="rd-navbar-search-mobile" class="rd-navbar-search-mobile">
      <form action="search-results.php" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
        <div class="form-group">
          <label for="rd-navbar-mobile-search-form-input" class="form-label">Search...</label>
          <input id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
        </div>
        <button type="submit" class="icon fa-search rd-navbar-search-button"></button>
      </form>
    </div>
  </div>
</div>

<!--RD Navbar shop-->
<!-- <div class="rd-navbar-cart"><span class="icon fa-shopping-cart"></span><a href="shopping-cart.php" class="inset-left-10">2</a></div> -->
