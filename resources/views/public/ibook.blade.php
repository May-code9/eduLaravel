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

            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Romance</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Romance</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Romance</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Romance</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Romance</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Romance</span></a></li>
            <li class="block-display"><a href="#"><span class="text-dark text-bold size-18">Romance</span></a></li>
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
      <div class=" section-70 section-md-70" style="padding-top: 20px; padding-left: 20px" >
        <div class="range offset-top-20 range-xs-center">
          <div class="text-left">
            <div class="cell-md-12">

              <h4 class="text-bold">About Book</h4>
              <h5 class="text-bold">Strategy</h5>
              <div class="text-subline"></div>
              <div class="offset-top-20 big-just">
                <p>text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
              </div>


            </div>

            <div class="offset-top-40"></div>

            <div class="cell-md-12">

              <h4 class="text-bold">About Author</h4>
              <h5 class="text-bold">Austine Clark</h5>
              <div class="text-subline"></div>
              <div class="offset-top-20 big-just">
                <img src="{{ asset('images/books/1524141842.jpg') }}" width="250" height="250" alt="" class="img-responsive img-rounded" style="float: left; margin: 0 10px 20px;margin-right:20px;">
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
                <p>text text text text text text text text text text text text text text text text text text </p>
              </div>


            </div>
          </div>
        </div>
      </div>
      <!-- <div class="text-subline"></div> -->
      <hr>

    </div>
  </section>
</main>
<!-- Corporate footer-->
@endsection
