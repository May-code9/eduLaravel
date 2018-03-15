@extends('layouts.base')

@section('title')
  Home
@endsection

@section('content')
<!-- Page Content-->
<main class="page-content">
  <section>
    <!-- Swiper-->
    <div data-height="47.179%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
      <div class="swiper-wrapper">
        <div data-slide-bg="images/slide-01-1920x810.jpg" style="background-position: 80% center" class="swiper-slide">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="range range-xs-left">
                <div class="cell-md-8 cell-xs-12 cell-sm-12">
                  <!-- <div data-caption-animate="fadeInUp" data-caption-delay="100">
                    <h1 class="text-bold">Studying science from a new angle.</h1>
                  </div> -->
                  <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-lg-right-100">
                    <h3>“ The reason for education is to bring light to the inner gifts in men so that they shine bright with their creativity, innovations, visions, and abilities. ”</h3>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="400" class="offset-top-20 offset-xl-top-40">
                    <a href="{{ route('login') }}" class="btn btn-primary">Sign Up for Excursion</a>
                    <div class="inset-xs-left-30 reveal-lg-inline-block">
                      <a href="academic.php" class="btn btn-default veil reveal-lg-inline-block">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-slide-bg="images/slide-02-1920x810.jpg" style="background-position: 80% center" class="swiper-slide">
          <!-- <div class="swiper-slide-caption">
            <div class="container">
              <div class="range range-xs-center">
                <div class="cell-md-9 text-center cell-xs-10">
                  <div data-caption-animate="fadeInUp" data-caption-delay="100">
                    <h1 class="text-bold">Take a step toward your future career.</h1>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-lg-right-100">
                    <h5>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects that will be especially useful for you when climbing the career ladder.</h5>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="400" class="offset-top-20 offset-xl-top-40"><a href="login-register.php" class="btn btn-primary">Sign Up for Excursion</a>
                    <div class="inset-xs-left-30 reveal-lg-inline-block"><a href="academic.php" class="btn btn-default veil reveal-lg-inline-block">Learn More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <div data-slide-bg="images/slide-03-1920x810.jpg" style="background-position: 80% center" class="swiper-slide">
          <!-- <div class="swiper-slide-caption">
            <div class="container">
              <div class="range range-xs-center">
                <div class="cell-md-9 text-center cell-xs-10">
                  <div data-caption-animate="fadeInUp" data-caption-delay="100">
                    <h1 class="text-bold">Get immersed into <br class="veil reveal-md-inline-block"> studying.</h1>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-lg-right-100">
                    <h5>If you want to explore multiple subjects in greater depth than you ever did in high school, then you're on the right way. We offer in-depth studying of your preferred courses.</h5>
                  </div>
                  <div data-caption-animate="fadeInUp" data-caption-delay="400" class="offset-top-20 offset-xl-top-40"><a href="login-register.php" class="btn btn-primary">Sign Up for Excursion</a>
                    <div class="inset-xs-left-30 reveal-lg-inline-block"><a href="academic.php" class="btn btn-default veil reveal-lg-inline-block">Learn More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- Swiper Pagination-->
      <div class="swiper-pagination"></div>
    </div>
  </section>
  <!-- Events-->
  <section class="bg-catskill">
    <div class="shell section-70 section-md-70" style="padding-top: 20px" >
      <h2 class="text-bold" style="margin-bottom: 15px">Top from Institutions</h2>
      <!-- <hr class="divider bg-madison"> -->
      <div class="offset-top-10 offset-bottom-10" style="text-align: right">
        <a href="{{ route('edu_school') }}" class="btn btn-madison btn-sm">
        <span>View Institution</span>
      </a>
    </div>
      <div class="range offset-top-20 range-xs-center">
        <div class="cell-sm-6 cell-md-3">
          <article class="post-event">
            <div class="post-event-img-overlay">
              <img src="images/blog/events-01-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
              <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
              </div>
            </div>
            <div class="unit unit-lg">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">31</div>
                  <p class="reveal-inline-block reveal-lg-block">September</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit-body downer">
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
        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-sm-top-0">
          <article class="post-event">
            <div class="post-event-img-overlay"><img src="images/blog/events-02-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
              <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
              </div>
            </div>
            <div class="unit unit-lg">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">5</div>
                  <p class="reveal-inline-block reveal-lg-block">July</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit-body downer">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.php">International Conference on Biomolecular Engineering</a></h6>
                  <ul class="list-inline list-inline-xs">
                    <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Raymond Salazar</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0">
          <article class="post-event">
            <div class="post-event-img-overlay"><img src="images/blog/events-03-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
              <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
              </div>
            </div>
            <div class="unit unit-lg">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">15</div>
                  <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit-body downer">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.php">Graphic Design Workshop</a></h6>
                  <ul class="list-inline list-inline-xs">
                    <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Bruce Hawkins</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0">
          <article class="post-event">
            <div class="post-event-img-overlay"><img src="images/blog/events-03-420x420.jpg" width="420" height="420" alt="" class="img-responsive">
              <div class="post-event-overlay context-dark"><a href="apply.php" class="btn btn-primary btn-sm">Book Now</a>
                <div class="offset-top-20"><a href="event-page.php" class="btn btn-default btn-sm">Learn More</a></div>
              </div>
            </div>
            <div class="unit unit-lg">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">15</div>
                  <p class="reveal-inline-block reveal-lg-block">June</p><span class="text-bold reveal-inline-block reveal-lg-block inset-left-10 inset-lg-left-0">5:00pm</span>
                </div>
              </div>
              <div class="unit-body downer">
                <div class="post-event-body text-lg-left">
                  <h6><a href="event-page.php">Graphic Design Workshop</a></h6>
                  <ul class="list-inline list-inline-xs">
                    <li><a href="team-member-profile.php"><span class="icon icon-xxs mdi mdi-account-outline text-middle"></span><span class="inset-left-10 text-dark text-middle">Bruce Hawkins</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
   <!-- Events-->
  <section>
    <div class="shell section-70 section-md-70" style="padding-top: 20px" >
      <h2 class="text-bold" style="margin-bottom: 15px">Top from Classroom</h2>
      <!-- <hr class="divider bg-madison"> -->
      <div class="offset-top-10" style="text-align: right; margin-bottom: 50px">
        <a href="{{ route('edu_school') }}" class="btn btn-madison btn-sm">
        <span>View Classroom</span>
      </a>
    </div>

    <div class="range offset-top-20 range-xs-center">
        <div class="cell-sm-6 cell-md-3">
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
        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0">
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
        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0">
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
        <div class="cell-sm-6 cell-md-3 offset-top-50 offset-md-top-0">
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
  </section>
  <!-- Trusted by Over 6000+ Students-->
  <section class="context-dark">
    <!-- RD Parallax-->
    <div data-on="false" data-md-on="true" class="rd-parallax">
      <div data-speed="0.2" data-type="media" data-url="images/parallax-01.jpg" class="rd-parallax-layer"></div>
      <div data-speed="0.05" data-type="html" class="rd-parallax-layer">
        <div class="shell section-100 section-md-40">
          <h2 class="text-bold">We work hard to prepare every student <br class="visible-lg-inline"> for the adult life.</h2>
          <div class="offset-top-35 offset-lg-top-70"><a href="{{ route('login') }}" class="btn btn-primary">Get Started</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest news-->
  <section class="bg-catskill">
    <div class="shell section-100 section-md-50">
      <h2 class="text-bold">Latest News</h2>
      <div class="offset-top-10 offset-bottom-10" style="text-align: right;">
        <a href="{{ route('edu_school') }}" class="btn btn-madison btn-sm">
        <span>View All Posts</span>
      </a>
    </div>
      <!-- <hr class="divider bg-madison"> -->
      <div class="range offset-top-60 text-left range-xs-center">
        <div class="cell-sm-6 cell-md-4 zoom">
          <article class="post-news"><a href="news-post-page.php"><img src="images/blog/news-01-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
            <div class="post-news-body">
              <h6><a href="news-post-page.php">Liberal Arts Colleges Rankings</a></h6>
              <div class="offset-top-20">
                <p>Liberal Arts Colleges emphasize undergraduate education and award at least half of their degrees in the liberal arts fields of study.</p>
              </div>
              <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0 zoom">
          <article class="post-news"><a href="news-post-page.php"><img src="images/blog/news-02-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
            <div class="post-news-body">
              <h6><a href="news-post-page.php">10 Law Schools Where the Most Accepted Students Enroll</a></h6>
              <div class="offset-top-20">
                <p>At these schools, at least 42 percent of accepted students enrolled in fall 2015, U.S. News data show.</p>
              </div>
              <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
            </div>
          </article>
        </div>
        <div class="cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0 zoom">
          <article class="post-news"><a href="news-post-page.php"><img src="images/blog/news-03-370x240.jpg" width="370" height="240" alt="" class="img-responsive"></a>
            <div class="post-news-body">
              <h6><a href="news-post-page.php">5 Ways to Pay for Community College</a></h6>
              <div class="offset-top-20">
                <p>Many community colleges offer promise programs, which offer tuition-free awards to eligible students – mainly to students with Pell grant eligibility.</p>
              </div>
              <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
            </div>
          </article>
        </div>
      </div>

    </div>
  </section>
  <!-- Testimonials-->
  <section class="bg-madison context-dark text-sm-left">
    <div class="shell">
      <div class="range range-xs-center range-sm-left offset-top-0">
        <div class="cell-xs-10 cell-sm-7 cell-lg-6 section-image-aside section-image-aside-right text-sm-left">
          <div style="background-image: url(images/home-01-846x1002.jpg)" class="section-image-aside-img veil reveal-sm-block"></div>
          <div class="section-image-aside-body section-70 section-md-50 inset-sm-right-70 inset-lg-right-110">
            <h2 class="text-bold">Connect</h2>
            <h3>with a network of People in our community passionate about Education</h3>
            <hr class="divider bg-madison hr-sm-left-0">
            <div data-items="1" data-sm-margin="10" data-nav="false" data-dots="true" data-nav-class="[&quot;owl-prev fa-angle-left&quot;, &quot;owl-next fa-angle-right&quot;]" class="owl-carousel owl-carousel-default offset-top-30 offset-md-top-50">
              <!-- <div>
                <div class="quote-classic-boxed text-left">
                  <div class="quote-body">
                    <q>When you work full-time while studying, you need to sacrifice personal time, which meant that I took my studies seriously. My ambition was to complete my degree successfully.</q>
                    <div class="offset-top-30 text-left">
                      <div class="unit unit-horizontal">
                        <div class="unit-left"><img src="images/users/user-debra-banks-230x230.jpg" width="80" height="80" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                        <div class="unit-body">
                          <cite class="font-accent">Debra Banks</cite>
                          <div class="offset-top-5">
                            <p class="text-dark text-italic">Diploma for Graduates in Management, USA</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="quote-classic-boxed text-left">
                  <div class="quote-body">
                    <q>When I researched the programs available I realized that Concord was offering exactly the type of studying in mathematics that interested me.</q>
                    <div class="offset-top-30 text-left">
                      <div class="unit unit-horizontal">
                        <div class="unit-left"><img src="images/users/user-steven-alvarez-230x230.jpg" width="80" height="80" alt="" class="img-responsive reveal-inline-block img-circle"></div>
                        <div class="unit-body">
                          <cite class="font-accent">Steven Alvarez</cite>
                          <div class="offset-top-5">
                            <p class="text-dark text-italic">Diploma for Graduates in Mathematics, USA</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Counters-->
  <section class="section-50 section-md-80 bg-catskill" style="padding-top: 50px; padding-bottom: 25px">
    <div class="shell">
      <h2 class="text-bold">School Advantages</h2>
      <hr class="divider bg-madison">
      <div class="range range-xs-center offset-top-30">
        <div class="cell-xs-10 cell-sm-8">
          <p>{{ config('app.name') }} has over time created a vast network of both people and institutions who are passionate to make great things happen in Education. You too can be a part of this network now by signing up.</p>
        </div>
      </div>
      <div class="range range-xs-center range-md-left offset-top-40 counters">
        <div class="cell-sm-6 cell-md-3">
          <!-- Counter type 1-->
          <div class="counter-type-1"><span class="icon icon-sm text-madison mdi fa-university"></span>
            <div class="h3 text-bold text-primary offset-top-15"><span data-speed="1300" data-from="0" data-to="97" class="counter"></span><span>%</span></div>
            <hr class="divider bg-gray-light divider-sm"/>
            <div class="offset-top-10">
              <h6 class="text-black font-accent">Institutions</h6>
            </div>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-65 offset-sm-top-0">
          <!-- Counter type 1-->
          <div class="counter-type-1"><span class="icon icon-sm text-madison mdi fa-briefcase"></span>
            <div class="h3 text-bold text-primary offset-top-15"><span data-speed="1250" data-from="0" data-to="30" class="counter"></span><span>+</span></div>
            <hr class="divider bg-gray-light divider-sm"/>
            <div class="offset-top-10">
              <h6 class="text-black font-accent">Parents/Guardians</h6>
            </div>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-65 offset-md-top-0">
          <!-- Counter type 1-->
          <div class="counter-type-1"><span class="icon icon-sm text-madison mdi fa-graduation-cap"></span>
            <div class="h3 text-bold text-primary offset-top-15"><span data-step="1500" data-from="0" data-to="8" class="counter"></span></div>
            <hr class="divider bg-gray-light divider-sm"/>
            <div class="offset-top-10">
              <h6 class="text-black font-accent">Students</h6>
            </div>
          </div>
        </div>
        <div class="cell-sm-6 cell-md-3 offset-top-65 offset-md-top-0">
          <!-- Counter type 1-->
          <div class="counter-type-1"><span class="icon icon-sm text-madison mdi fa-users"></span>
            <div class="h3 text-bold text-primary offset-top-15"><span data-step="500" data-from="0" data-to="6510" class="counter"></span></div>
            <hr class="divider bg-gray-light divider-sm"/>
            <div class="offset-top-10">
              <h6 class="text-black font-accent">Educational Worker</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Google map-->
  <section class="section-image-aside section-image-aside-left text-sm-left">
    <!-- <div class="shell">
      <div class="range range-xs-center range-lg-right offset-top-0">
        <div class="cell-xs-12 cell-lg-4">
          <div class="section-image-aside-body section-70 section-md-114 section-md-bottom-100">
            <div class="range">
              <div class="cell-sm-6 cell-lg-12">
                <h6 class="text-bold">Contact us</h6>
                <div class="text-subline"></div>
                <div class="offset-top-30">
                  <ul class="list-unstyled contact-info list">
                    <li>
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left"><span class="icon mdi fa-phone text-middle icon-xs text-madison"></span></div>
                        <div class="unit-body">
                          <a href="callto:{{ config('app.number') }}" class="text-dark">{{ config('app.number') }} |</a>
                          <a href="callto:{{ config('app.number2') }}" class="reveal-block reveal-md-inline-block text-dark">{{ config('app.number2') }}</a>
                        </div>
                      </div>
                    </li>
                    <li class="offset-top-15">
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left"><span class="icon mdi fa-map-marker text-middle icon-xs text-madison"></span></div>
                        <div class="unit-body text-left"><a href="#" class="text-dark">{{ config('app.location') }}</a></div>
                      </div>
                    </li>
                    <li class="offset-top-15">
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left"><span class="icon mdi fa-envelope-o text-middle icon-xs text-madison"></span></div>
                        <div class="unit-body">
                          <a href="#" class="text-dark">{{ config('app.email') }}</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="offset-top-15 text-left">
                  <ul class="list-inline list-inline-xs list-inline-madison">
                    <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"></a></li>
                  </ul>
                </div>
              </div>
              <div class="cell-sm-6 cell-lg-12">
                <h6 class="text-bold offset-top-30 offset-sm-top-0 offset-lg-top-50">Newsletter</h6>
                <div class="text-subline"></div>
                <div class="offset-top-30 text-left">
                  <p>Enter your email address to get the latest news, special events and student activities delivered right to your inbox.</p>
                </div>
                <div class="offset-top-10">
                  <form data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-subscribe">
                    <div class="form-group">
                      <div class="input-group input-group-sm">
                        <input placeholder="Your e-mail" type="email" name="email" data-constraints="@Required @Email" class="form-control"/><span class="input-group-btn">
                          <button type="submit" class="btn btn-sm btn-primary">Subscribe</button></span>
                        </div>
                      </div>
                      <div id="form-subscribe-footer" class="form-output"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </section>
  </main>
  @endsection
