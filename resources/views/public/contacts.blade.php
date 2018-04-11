@extends('layouts.base')

@section('title')
Contact
@endsection

@section('content')
<!-- Page Content-->
<main class="page-content">
  <section class="section-70 section-md-60">
    <div class="shell">
      <div class="range range-xs-center">
        <div class="cell-xs-10 cell-md-8 text-md-left">
          <h2 class="text-bold">Get in Touch</h2>
          <hr class="divider bg-madison hr-sm-left-0">
          <div class="offset-top-30 offset-md-top-60">
            <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
          </div>
          <div class="offset-top-30">
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="" class="rd-mailform text-left">
              <div class="range">
                <div class="cell-lg-6">
                  <div class="form-group">
                    <label for="contact-me-name" class="form-label form-label-outside">First name</label>
                    <input id="contact-me-name" type="text" name="name" data-constraints="@Required" class="form-control">
                  </div>
                </div>
                <div class="cell-lg-6 offset-top-12 offset-lg-top-0">
                  <div class="form-group">
                    <label for="contact-me-last-name" class="form-label form-label-outside">Last name</label>
                    <input id="contact-me-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control">
                  </div>
                </div>
                <div class="cell-lg-6 offset-top-12">
                  <div class="form-group">
                    <label for="contact-me-email" class="form-label form-label-outside">E-mail</label>
                    <input id="contact-me-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                  </div>
                </div>
                <div class="cell-lg-6 offset-top-12">
                  <div class="form-group">
                    <label for="contact-me-phone" class="form-label form-label-outside">Phone</label>
                    <input id="contact-me-phone" type="text" name="phone" data-constraints="@Required @IsNumeric" class="form-control">
                  </div>
                </div>
                <div class="cell-lg-12 offset-top-12">
                  <div class="form-group">
                    <label for="contact-me-message" class="form-label form-label-outside">Message</label>
                    <textarea id="contact-me-message" name="message" data-constraints="@Required" style="height: 220px" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <div class="text-center text-lg-left offset-top-20">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>
        </div>
        <div class="cell-xs-10 cell-md-4 offset-top-65 offset-md-top-0 text-left">
          <div class="inset-md-left-30">
            <h6 class="text-bold">Socials</h6>
            <div class="hr bg-gray-light offset-top-10"></div>
            <ul class="list-inline list-inline-xs list-inline-madison">
              <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
              <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
              <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
              <li><a href="#" class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"></a></li>
            </ul>
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="text-bold">Phones</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <ul class="list list-unstyled">
                  <li>
                    <span class="icon icon-xs text-madison mdi fa-phone text-middle"></span>
                    <a href="{{ config('app.number') }}" class="text-middle inset-left-10 text-dark">{{ config('app.number') }}</a>
                  </li>
                  <li>
                    <span class="icon icon-xs text-madison mdi fa-phone text-middle"></span>
                    <a href="{{ config('app.number2') }}" class="text-middle inset-left-10 text-dark">{{ config('app.number2') }}</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="text-bold">E-mail</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <ul class="list list-unstyled">
                  <li>
                    <span class="icon icon-xs text-madison mdi fa-envelope-o text-middle"></span>
                    <a href="{{ config('app.email') }}" class="text-middle inset-left-10 text-dark">{{ config('app.email') }}</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-60">
              <h6 class="text-bold">Address</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <div class="unit unit-horizontal unit-spacing-xs">
                  <div class="unit-left"><span class="icon icon-xs mdi fa-map-marker text-madison"></span></div>
                  <div class="unit-body">
                    <p><a href="#" class="text-dark">{{ config('app.location') }}</a></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-top-30 offset-md-top-65">
              <h6 class="text-bold">Opening Hours</h6>
              <div>
                <div class="hr bg-gray-light offset-top-10"></div>
              </div>
              <div class="offset-top-15">
                <div class="unit unit-horizontal unit-spacing-xs">
                  <div class="unit-left"><span class="icon icon-xs mdi fa-calendar text-madison"></span></div>
                  <div class="unit-body">
                    <div>
                      <p>Mon-Fri: 8:00am-8:00pm</p>
                    </div>
                    <div>
                      <p>Sat: 8:00am-3:00pm</p>
                    </div>
                    <div>
                      <p>Sun: Closed</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- Page Footer-->
@endsection
