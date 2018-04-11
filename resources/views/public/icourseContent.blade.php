@extends('layouts.base')

@section('title')
@if($category == 1)
Course/{{$courses->course}}/{{ $displayVideo->content_title }}
@endif
@if($category == 2)
Course/{{$courses->course}}/{{ $displayText->content_title }}
@endif
@if($category == 3)
Course/{{$courses->course}}/{{ $displayImage->content_title }}
@endif
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

          @if($courseWeeks[0] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value1s[1]}} </h6>
            @foreach($value1s[0] as $value1[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="/courses/{{ $value1[0]->course_id }}/{{ $value1[0]->week_no }}/{{$value1[0]->content_number}}"><span class="inset-left-10 text-dark">{{ $value1[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[1] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value2s[1]}} </h6>
            @foreach($value2s[0] as $value2[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="/courses/{{ $value2[0]->course_id }}/{{ $value2[0]->week_no }}/{{$value2[0]->content_number}}"><span class="inset-left-10 text-dark">{{ $value2[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[2] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value3s[1]}} </h6>
            @foreach($value3s[0] as $value3[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="/courses/{{ $value3[0]->course_id }}/{{ $value3[0]->week_no }}/{{$value3[0]->content_number}}"><span class="inset-left-10 text-dark">{{ $value3[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[3] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value4s[1]}} </h6>
            @foreach($value4s[0] as $value4[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="/courses/{{ $value4[0]->course_id }}/{{ $value4[0]->week_no }}/{{$value4[0]->content_number}}"><span class="inset-left-10 text-dark">{{ $value4[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[4] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value5s[1]}} </h6>
            @foreach($value5s[0] as $value5[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="/courses/{{ $value5[0]->course_id }}/{{ $value5[0]->week_no }}/{{$value5[0]->content_number}}"><span class="inset-left-10 text-dark">{{ $value5[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[5] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value5s[1]}} </h6>
            @foreach($value6s[0] as $value6[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="/courses/{{ $value6[0]->course_id }}/{{ $value6[0]->week_no }}/{{$value6[0]->content_number}}"><span class="inset-left-10 text-dark">{{ $value6[0]->content_title }}</span></a></li>
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
              <h4 class="text-bold">{{ $courses->course }}</h4>
              <div class="text-subline"></div>
              @if($category == 1)
              <div class="offset-top-20 big-just">
                <video width="900" controls style="height:510px">
                 <source src="{{ asset('video/' . $displayVideo->content_video) }}" type="video/mp4">
                </video>
              </div>
              <div>
                <h6 class="offset-top-20 text-bold col-md-6">{{ $displayVideo->content_title }}</h6>
                <div class="offset-top-10 col-md-6 right"><a href="{{ asset('pdf/' . $displayVideo->content_pdf) }}" class="btn btn-success">Download Script</a></div>
              </div>
              @endif

              @if($category == 2)
              <div class="offset-top-20 big-just">
                {!! $displayText->content_text !!}
              </div>
              <div>
                <h6 class="offset-top-20 text-bold col-md-6">{{ $displayText->content_title }}</h6>
                <div class="offset-top-10 col-md-6 right"><a href="{{ asset('pdf/' . $displayText->content_pdf) }}" class="btn btn-success">Download Script</a></div>
              </div>
              @endif

              @if($category == 3)
              <div class="offset-top-20 big-just">
                <img src="{{ asset('images/content/' . $displayImage->content_image) }}" class="img-responsive img-rounded" width="1000" height="500"/>
                {!! $displayImage->content_text !!}
              </div>
              <div>
                <h6 class="offset-top-20 text-bold col-md-6">{{ $displayImage->content_title }}</h6>
                <div class="offset-top-10 col-md-6 right"><a href="{{ asset('pdf/' . $displayImage->content_pdf) }}" class="btn btn-success">Download Script</a></div>
              </div>
              @endif

            </div>

            @if($category == 1)
              <div class="offset-top-80"></div>
            @endif

            <div class="cell-md-12">
              @if($category == 1)
              <h4 class="text-bold">Tutorial Script</h4>
              <div class="text-subline"></div>
              <div class="offset-top-20 big-just">
                {!! $contentText !!}
              </div>
              <!-- <div class="offset-top-30"><a href="apply.php" class="btn btn-primary">Apply Now</a></div> -->
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Corporate footer-->
@endsection
