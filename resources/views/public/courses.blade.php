@extends('layouts.base')

@section('title')
Recommended Courses
@endsection

@section('content')
<!-- Page Content-->
<main class="page-content cell-md-12">
  <section class="range">
    <div class="cell-md-3 border-shadow" style="background-color: #f8f8f8">
      <div class=" section-70 section-md-70" style="padding-top: 20px" >
        <h4 class="text-bold" style="margin-bottom: 15px">Classroom Categories</h4>
        <div class="text-subline"></div>

      </div>
    </div>
    <div class="cell-md-9">
      <div class=" section-30 section-bottom-10">
        <h3 class="text-bold" style="margin-bottom: 15px; text-align: left; padding-left: 20px">Read Articles</h3>
        <!-- <hr class="divider bg-madison"> -->

        <div class="range offset-top-20 range-xs-center">
          <div class="cell-sm-6 cell-md-4">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Read Article</a>

                </div>
              </div>
              <div class="unit unit-lg">
                <div class="unit-left">
                  <div class="post-event-meta text-center remove-side-box">
                    <div class="h3 text-bold reveal-inline-block reveal-lg-block trans-text">00</div>
                    <p class="reveal-inline-block reveal-lg-block trans-text">00000000</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0 trans-text">0000</span>
                  </div>
                </div>
                <div class="unit-body downchange">
                  <div class="post-event-body text-lg-left">
                    <h6 class="text-center"><a href="event-page.php">Classroom Management</a></h6>
                    <ul class="list-inline list-inline-xs text-center">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Dream Alive Academy</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Read Article</a>

                </div>
              </div>
              <div class="unit unit-lg">
                <div class="unit-left">
                  <div class="post-event-meta text-center remove-side-box">
                    <div class="h3 text-bold reveal-inline-block reveal-lg-block trans-text">00</div>
                    <p class="reveal-inline-block reveal-lg-block trans-text">00000000</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0 trans-text">0000</span>
                  </div>
                </div>
                <div class="unit-body downchange">
                  <div class="post-event-body text-lg-left">
                    <h6 class="text-center"><a href="event-page.php">Library Management</a></h6>
                    <ul class="list-inline list-inline-xs text-center">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">OakSpring Hill Schools</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Read Article</a>

                </div>
              </div>
              <div class="unit unit-lg">
                <div class="unit-left">
                  <div class="post-event-meta text-center remove-side-box">
                    <div class="h3 text-bold reveal-inline-block reveal-lg-block trans-text">00</div>
                    <p class="reveal-inline-block reveal-lg-block trans-text">00000000</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0 trans-text">0000</span>
                  </div>
                </div>
                <div class="unit-body downchange">
                  <div class="post-event-body text-lg-left">
                    <h6 class="text-center"><a href="event-page.php">Study Techniques</a></h6>
                    <ul class="list-inline list-inline-xs text-center">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">MyEduSpring Resource</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
        <div class="offset-top-20" style="text-align: right;">
          <a href="{{ route('edu_courses') }}" class="btn btn-madison btn-sm">
            <span>Read More</span>
          </a>
        </div>
      </div>

      <hr>

      <div class=" section-20 section-bottom-30" >
        <h3 class="text-bold" style="margin-bottom: 15px; text-align: left; padding-left: 20px">Take Courses</h3>
        <!-- <hr class="divider bg-madison"> -->

        <div class="range offset-top-20 range-xs-center">
          @forelse($courses as $course)
          <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0 offset-md-top-50">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img src="{{ asset('images/course/' . $course->course_image) }}" width="420" height="420" alt="" class="img-responsive img-rounded">
                <div class="post-event-overlay context-dark"><a href="/courses/{{ $course->id }}" class="btn btn-primary btn-sm">Take Course</a>
                </div>
              </div>
              <div class="unit unit-lg">
                <div class="unit-left">
                  <div class="post-event-meta text-center remove-side-box">
                    <div class="h3 text-bold reveal-inline-block reveal-lg-block trans-text">00</div>
                    <p class="reveal-inline-block reveal-lg-block trans-text">00000000</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0 trans-text">0000</span>
                  </div>
                </div>
                <div class="unit-body downchange">
                  <div class="post-event-body text-lg-left">
                    <h6 class="text-center"><a href="/courses/{{ $course->id }}">{{ $course->course }}</a></h6>
                    <ul class="list-inline list-inline-xs text-center">
                      <li><a href="#"><span class="fa fa-university text-middle"></span><span class="inset-left-10 text-dark text-middle">{{ $course->name }}</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
          @empty
          <h1>NO Courses Yet</h1>
          @endforelse
        </div>

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
