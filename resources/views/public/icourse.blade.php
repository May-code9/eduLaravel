@extends('layouts.base')

@section('title')
Course/{{$courses->course}}
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

        @if($checkIfUserCourseExit == 1)
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

        @else
          @if($courseWeeks[0] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value1s[1]}} </h6>
            @foreach($value1s[0] as $value1[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $value1[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[1] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value2s[1]}} </h6>
            @foreach($value2s[0] as $value2[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $value2[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[2] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value3s[1]}} </h6>
            @foreach($value3s[0] as $value3[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $value3[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[3] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value4s[1]}} </h6>
            @foreach($value4s[0] as $value4[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $value4[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[4] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value5s[1]}} </h6>
            @foreach($value5s[0] as $value5[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $value5[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif

          @if($courseWeeks[5] > 0)
            <h6 class="text-left text-bold" style="margin-bottom: 15px">Week {{$value6s[1]}} </h6>
            @foreach($value6s[0] as $value6[0])
            <ul class="list-inline list-inline-xs block-left text-left">
              <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">{{ $value6[0]->content_title }}</span></a></li>
            </ul>
            @endforeach
          @endif
        @endif
        </div>
      </div>
    </div>
    <div class="cell-md-9">
      <div class=" section-70 section-md-70" style="padding-top: 20px; padding-left: 20px" >
        <div class="range offset-top-20 range-xs-center">
          <div class="text-left">
            <div class="cell-md-12">
              @if($courses)
              <h4 class="text-bold">About Course</h4>
              <h5 class="text-bold">{{$courses->course}}</h5>
              <div class="text-subline"></div>
              <div class="offset-top-20 big-just">
                {!! $courses->about_course !!}
              </div>
              @endif

            </div>

            <div class="offset-top-40"></div>

            <div class="cell-md-12">
              @if($courses)
              <h4 class="text-bold">About Instructor</h4>
              <h5 class="text-bold">{{ $courses->instructor }}</h5>
              <div class="text-subline"></div>
              <div class="offset-top-20 big-just">
                <img src="{{ asset('images/instructors/' . $courses->instructor_image) }}" width="150" height="150" alt="" class="img-responsive" style="float: right; margin: 15px;">
                {!! $courses->about_instructor !!}
              </div>
              @endif

              @if($checkIfUserCourseExit == 0)
              <div class="offset-top-40"></div>
              <h4 class="text-bold">Taking Course</h4>
              <div class="text-subline"></div>
              <p>To gain access to {{ $courses->course }} click the <code>Take Course</code> button below. This invariably means you have enrolled for the {{ $courses->course }} course</p>
              <div class="offset-top-30">
                <a href="/takeCourse/{{ $courses->id }}" onclick="event.preventDefault(); document.getElementById('take-course').submit();" class="btn btn-primary">Take Course</a>
                <form id="take-course" action="/takeCourse/{{ $courses->id }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
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
