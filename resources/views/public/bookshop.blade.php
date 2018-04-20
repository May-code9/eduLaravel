@extends('layouts.base')

@section('title')
Bookshop
@endsection

@section('content')
<!-- Page Content-->
<main class="page-content cell-md-12">
  <section class="range">
    <div class="cell-md-3 border-shadow" style="background-color: #f8f8f8">
      <div class=" section-70 section-md-20">
        <div class="margin-left">
          <ul class="list-inline list-inline-xs block-left text-left pt">
            <li class="block-display section-5"><a href="#"><span class="text-dark text-bold size-18">New Release</span></a></li>
            <li class="block-display section-5"><a href="#"><span class="text-dark text-bold size-18">Best Sellers</span></a></li>
            <li class="block-display section-5"><a href="#"><span class="text-dark text-bold size-18">Saved Books</span></a></li>
            <li class="block-display section-5"><a href="#"><span class="text-dark text-bold size-18">Self Published</span></a></li>
            <li class="block-display section-5"><a href="#"><span class="text-dark text-bold size-18">Book Reviews</span></a></li>
          </ul>
        </div>

      </div>

      <div class="section-md-40" style="padding-top: 10px" >
        <div class="margin-left">
          <h4 class="text-left text-bold" style="margin-bottom: 15px">Books Categories</h4>
          <div class="text-subline"></div>
          <ul class="list-inline list-inline-xs block-left text-left pt">
            @forelse($getBookCategories as $getBookCategory)
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">{{ $getBookCategory }}</span></a></li>
            @empty
            <h1>No Book Category Yet</h1>
            @endforelse
          </ul>
        </div>
      </div>

      <div class="section-md-40" style="padding-top: 10px" >
        <div class="margin-left">
          <h4 class="text-left text-bold" style="margin-bottom: 15px">Others</h4>
          <div class="text-subline"></div>
          <ul class="list-inline list-inline-xs block-left text-left pt">
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Bibles & Devotionals</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Biographies & Autobiographies</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Comics</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Dictionaries</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Encyclopedias</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Magazines</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Newspapers</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Sports</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Travel</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Self Help</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Cookbooks</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Journals</span></a></li>
          </ul>
        </div>
      </div>

    </div>

    <div class="cell-md-9">
      <div class=" section-30 section-bottom-10">
        <h4 class="text-bold" style="margin-bottom: 5px; text-align: left; padding-left: 20px">New Release</h4>
        <!-- <hr class="divider bg-madison"> -->

        <!-- <div class="offset-top-10 range range-xs-center"> -->
          <div class="range range-lg-condensed offset-top-20 range-xs-center section-products">
            @forelse($getNewReleases as $getNewRelease)
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0">
              <div class="product">
                <div class="product-body"><img src="{{ asset('images/books/' . $getNewRelease->book_image) }}" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">{{ $getNewRelease->book_name }} </h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="size-13 purple">{{ $getNewRelease->author_name }}</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">₦ {{ $getNewRelease->book_cost }}</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">

                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            @empty
            <h1>No Book Yet</h1>
            @endforelse
          </div>
        <!-- </div> -->
        <div class="offset-top-20" style="text-align: right;">
          <a href="{{ route('edu_courses') }}" class="btn btn-madison btn-sm">
            <span>Read More</span>
          </a>
        </div>
      </div>


      <!-- <div class="text-subline"></div> -->
      <hr>

      <div class=" section-10 section-bottom-30" >
        <h4 class="text-bold" style="margin-bottom: 5px; text-align: left; padding-left: 20px">Best Seller</h4>
        <!-- <hr class="divider bg-madison"> -->

        <!-- <div class="offset-top-20 range range-xs-center"> -->
          <div class="range range-lg-condensed offset-top-20 range-xs-center section-products">
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4">
              <div class="product">
                <div class="product-body"><img src="images/product-06-225x225.jpg" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">Strategy: <span class="size-13 purple">Austine Clark</span></h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">$1000</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <div class="offset-top-5">
                    <p class="text-primary size-12 just"><a href="single-product.php">Customized Trio Stylus Pen with LED Light Customized Trio Stylus Pen with LED Light</a></p>
                  </div>
                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0">
              <div class="product">
                <div class="product-body"><img src="images/product-06-225x225.jpg" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">Strategy: <span class="size-13 purple">Austine Clark</span></h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">$1000</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <div class="offset-top-5">
                    <p class="text-primary size-12 just"><a href="single-product.php">Customized Trio Stylus Pen with LED Light Customized Trio Stylus Pen with LED Light</a></p>
                  </div>
                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0">
              <div class="product">
                <div class="product-body"><img src="images/product-06-225x225.jpg" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">Strategy: <span class="size-13 purple">Austine Clark</span></h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">$1000</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <div class="offset-top-5">
                    <p class="text-primary size-12 just"><a href="single-product.php">Customized Trio Stylus Pen with LED Light Customized Trio Stylus Pen with LED Light</a></p>
                  </div>
                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4 offset-top-30 offset-lg-top-0">
              <div class="product">
                <div class="product-body"><img src="images/product-06-225x225.jpg" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">Strategy: <span class="size-13 purple">Austine Clark</span></h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">$1000</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <div class="offset-top-5">
                    <p class="text-primary size-12 just"><a href="single-product.php">Customized Trio Stylus Pen with LED Light Customized Trio Stylus Pen with LED Light</a></p>
                  </div>
                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
        <div class="offset-top-20" style="text-align: right">
          <a href="{{ route('edu_courses') }}" class="btn btn-madison btn-sm">
            <span>Read More</span>
          </a>
        </div>
      </div>

      <hr>

      <div class=" section-10 section-bottom-30" >
        <h4 class="text-bold" style="margin-bottom: 5px; text-align: left; padding-left: 20px">Top from Book Categories</h4>
        <!-- <hr class="divider bg-madison"> -->

        <!-- <div class="offset-top-20 range range-xs-center"> -->
          <div class="range range-lg-condensed offset-top-20 range-xs-center section-products">
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4">
              <div class="product">
                <div class="product-body"><img src="images/product-06-225x225.jpg" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">Strategy: <span class="size-13 purple">Austine Clark</span></h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">$1000</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <div class="offset-top-5">
                    <p class="text-primary size-12 just"><a href="single-product.php">Customized Trio Stylus Pen with LED Light Customized Trio Stylus Pen with LED Light</a></p>
                  </div>
                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0">
              <div class="product">
                <div class="product-body"><img src="images/product-06-225x225.jpg" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">Strategy: <span class="size-13 purple">Austine Clark</span></h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">$1000</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <div class="offset-top-5">
                    <p class="text-primary size-12 just"><a href="single-product.php">Customized Trio Stylus Pen with LED Light Customized Trio Stylus Pen with LED Light</a></p>
                  </div>
                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0">
              <div class="product">
                <div class="product-body"><img src="images/product-06-225x225.jpg" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">Strategy: <span class="size-13 purple">Austine Clark</span></h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">$1000</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <div class="offset-top-5">
                    <p class="text-primary size-12 just"><a href="single-product.php">Customized Trio Stylus Pen with LED Light Customized Trio Stylus Pen with LED Light</a></p>
                  </div>
                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-xs-10 cell-lg-3 cell-sm-6 cell-md-4 offset-top-30 offset-lg-top-0">
              <div class="product">
                <div class="product-body"><img src="images/product-06-225x225.jpg" alt="" class="img-responsive reveal-inline-block" width="225" height="225">
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14">Strategy: <span class="size-13 purple">Austine Clark</span></h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <h6 class="text-bold size-14 purple">$1000</h6>
                  <hr style="margin-top:10px; margin-bottom:10px">
                  <div class="offset-top-5">
                    <p class="text-primary size-12 just"><a href="single-product.php">Customized Trio Stylus Pen with LED Light Customized Trio Stylus Pen with LED Light</a></p>
                  </div>
                </div>
                <div class="product-meta-info">
                  <ul class="list-inline list-inline-dark list-inline-lg">
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Preview</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-primary btn-icon-left btn-pad-sm"><span>Save</span></a></li>
                    <li class="li-btn"><a href="#" class="btn btn-sm btn-madison btn-icon-left btn-pad-sm"><span>Buy</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
        <div class="offset-top-20" style="text-align: right">
          <a href="{{ route('edu_courses') }}" class="btn btn-madison btn-sm">
            <span>Read More</span>
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Corporate footer-->
@endsection
