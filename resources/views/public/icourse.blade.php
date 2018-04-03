@extends('layouts.base')

@section('title')
Classroom Management
@endsection

@section('content')
<!-- Page Content-->
<main class="page-content cell-md-12">
  <section class="range">
    <div class="cell-md-3 border-shadow" style="background-color: #f8f8f8">
      <div class=" section-70 section-md-70" style="padding-top: 45px" >
        <h6 class="text-left text-bold" style="margin-bottom: 15px">Course Title</h6>
        @if($courses)
        <h4 class="text-left text-bold" style="margin-bottom: 15px">{{$courses->course}}</h4>
        @endif
        <div class="text-subline"></div>
        <div class="offset-bottom-20 offset-top-20">

        @if($week1 > 0)
          <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$one}} </h6>
          @foreach($weekContent1s as $weekContent1)
          <ul class="list-inline list-inline-xs block-left text-left">
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $weekContent1->content_title }}</span></a></li>
          </ul>
          @endforeach
        @endif

        @if($week2 > 0)
          <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$two}} </h6>
          @foreach($weekContent2s as $weekContent2)
          <ul class="list-inline list-inline-xs block-left text-left">
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $weekContent2->content_title }}</span></a></li>
          </ul>
          @endforeach
        @endif

        @if($week3 > 0)
          <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$three}} </h6>
          @foreach($weekContent3s as $weekContent3)
          <ul class="list-inline list-inline-xs block-left text-left">
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $weekContent3->content_title }}</span></a></li>
          </ul>
          @endforeach
        @endif

        @if($week4 > 0)
          <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$four}} </h6>
          @foreach($weekContent4s as $weekContent4)
          <ul class="list-inline list-inline-xs block-left text-left">
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $weekContent4->content_title }}</span></a></li>
          </ul>
          @endforeach
        @endif

        </div>
      </div>
    </div>
    <div class="cell-md-9">
      <div class=" section-70 section-md-70" style="padding-top: 20px; padding-left: 20px" >
        <div class="range offset-top-20 range-xs-center">
          <div class="text-left">
            <div class="cell-md-12">
              <h4 class="text-bold">About the Course</h4>
              <div class="text-subline"></div>
              @if($courses)
              <div class="offset-top-20 big-just">
                {!! $courses->about_course !!}
              </div>
              @endif
            </div>

            <div class="offset-top-40"></div>

            <div class="cell-md-12">
              <h4 class="text-bold">About the Instructor</h4>
              <div class="text-subline"></div>
              @if($courses)
              <div class="offset-top-20 big-just">
                <img src="{{ asset('images/instructors/' . $courses->instructor_image) }}" width="150" height="150" alt="" class="img-responsive" style="float: right; margin: 15px;">
                {!! $courses->about_instructor !!}
              </div>
              @endif
              <div class="offset-top-30"><a href="apply.php" class="btn btn-primary">Apply Now</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Corporate footer-->
@endsection
