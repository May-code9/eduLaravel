@extends('layouts.base')

@section('title')
School Archive
@endsection

@section('content')
<!-- Page Content-->
<main class="page-content cell-md-12">
  <section class="range">
    <div class="cell-md-4" style="float:left; background-color: #f8f8f8">
      <div class=" section-70 section-md-70" style="padding-top: 20px" >
        <h3 class="text-bold" style="margin-bottom: 15px">Classroom Categories</h3>
        <!-- <hr class="divider bg-madison"> -->
        <div class="offset-top-10" style="text-align: right; margin-bottom: 50px">
          <a href="{{ route('edu_classroom') }}" class="btn btn-madison btn-sm">
            <span>View Classroom</span>
          </a>
        </div>
      </div>
    </div>
    <div class="cell-md-8">
      <div class=" section-70 section-md-70" style="padding-top: 20px" >
        <h3 class="text-bold" style="margin-bottom: 15px; float: left; padding-left: 20px">Read Articles</h3>
        <!-- <hr class="divider bg-madison"> -->
        <div class="offset-top-10" style="text-align: right; margin-bottom: 50px">
          <a href="{{ route('edu_classroom') }}" class="btn btn-madison btn-sm">
            <span>View Classroom</span>
          </a>
        </div>

        <div class="range offset-top-20 range-xs-center">
          <div class="cell-sm-6 cell-md-4">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                  <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
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
                    <h6><a href="event-page.php">Spacewalking Conference</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
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
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                  <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
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
                    <h6><a href="event-page.php">Spacewalking Conference</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
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
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                  <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
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
                    <h6><a href="event-page.php">Spacewalking Conference</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

      <hr class="divider bg-madison">

      <div class=" section-70 section-md-70" style="padding-top: 20px" >
        <h3 class="text-bold" style="margin-bottom: 15px; float: left; padding-left: 20px">Take Courses</h3>
        <!-- <hr class="divider bg-madison"> -->
        <div class="offset-top-10" style="text-align: right; margin-bottom: 50px">
          <a href="{{ route('edu_classroom') }}" class="btn btn-madison btn-sm">
            <span>View Classroom</span>
          </a>
        </div>

        <div class="range offset-top-20 range-xs-center">
          <div class="cell-sm-6 cell-md-4">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                  <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
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
                    <h6><a href="event-page.php">Spacewalking Conference</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
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
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                  <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
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
                    <h6><a href="event-page.php">Spacewalking Conference</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
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
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                  <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
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
                    <h6><a href="event-page.php">Spacewalking Conference</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-50">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                  <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
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
                    <h6><a href="event-page.php">Spacewalking Conference</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-50">
            <article class="post-event">
              <div class="post-event-img-overlay">
                <img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
                <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                  <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
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
                    <h6><a href="event-page.php">Spacewalking Conference</a></h6>
                    <ul class="list-inline list-inline-xs">
                      <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Walter Stanley</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>

      </div>
    </div>
  </section>
</main>
<!-- Corporate footer-->
@endsection
