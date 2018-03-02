@extends('layouts.base')

@section('title')
  About Us
@endsection

@section('content')

<!-- Page Content-->
<main class="page-content">
  <!--A Meeting of Minds-->
  <section class="section-70 section-md-114">
    <div class="shell">
      <div class="range">
        <div class="cell-sm-4 cell-sm-push-2 text-sm-left">
          <div class="inset-sm-left-30"><img src="images/users/user-christopher-smith-340x300.jpg" width="340" height="300" alt="" class="img-responsive reveal-inline-block img-rounded">
            <div class="offset-top-20">
              <h6 class="text-primary text-bold">{{ config('app.founder') }}</h6>
            </div>
            <p>The First President of {{ config('app.name') }}, serving &copy 2017.</p>
          </div>
        </div>
        <div class="cell-sm-8 cell-sm-push-1 offset-top-50 offset-sm-top-0 text-sm-left">
          <h2 class="text-bold">A Meeting of Minds</h2>
          <hr class="divider bg-madison hr-sm-left-0">
          <!-- <div class="offset-top-30 offset-sm-top-60">
            <p>The original board of trustees laid the groundwork for what would become today's {{ config('app.name') }} on July 9, 1876, when the group gathered to hold the School's inaugural board meeting and drafted its articles of incorporation. This guiding document outlined elements the founders believed would build an enduring legacy for the high School: a commitment to offering a rigorous academic program and an ambition to provide "opportunities for all departments of higher education to persons of both sexes on equal terms." On September 10, 1876, the State of California issued Concord's official certificate of incorporation, marking the formal beginning of the High School's life.</p>
          </div>
          <p>An initial pledge of $600,000 (roughly $16 million in today's currency) from oil magnate John Anderson, along with contributions by the American Baptist Education Society, helped to found the establishment. The land where Concord is located now was donated by Marshall Field, owner of the historic Chicago department store that bore his name.</p>
          <p>Christopher Smith, Concord's first president, envisioned a university that was "brand new,' yet as solid as the ancient hills" - a modern research facility, combining an English-style undergraduate college and a German-style graduate research institute. {{ config('app.name') }} fulfilled Christopher's dream, quickly becoming a national leader in higher education and research: an institution of scholars unafraid to cross boundaries, share ideas, and ask difficult questions.</p> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Images-->
  <section>
    <div class="shell-wide">
      <div class="range">
        <div class="cell-sm-4"><img src="images/history-01-570x370.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-4"><img src="images/history-02-570x370.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
        <div class="cell-sm-4"><img src="images/history-03-570x370.jpg" width="570" height="370" alt="" class="img-responsive reveal-inline-block"></div>
      </div>
    </div>
  </section>
  <!--A Meeting of Minds-->
  <section class="section-70 section-md-114">
    <div class="shell">
      <div class="range range-xs-center range-sm-left">
        <div class="cell-sm-8 text-sm-left">
          <h2 class="text-bold">A Singular Focus</h2>
          <hr class="divider bg-madison hr-sm-left-0">
          <!-- <div class="offset-top-30 offset-sm-top-60">
            <p>President Smith articulated his hope and vision for the CHS at the first faculty meeting in 1888: "The question before us is how to become one in spirit, not necessarily in opinion."</p>
          </div>
          <p>The School's commitment to answering that question - and many others - continues to guide it today.</p>
          <p>As President Smith said in his inaugural address, "If we take ourselves back to Concord in its early years, we would find many major differences from what we observe today. . . . And yet, many of us connected to the High School feel that we might just as easily have been there - that going back to its early days, or in fact at any time since its inception, we would know unmistakably that we were at the {{ config('app.name') }}.</p>
          <p>Why is this? Because from its very inception, CHS has been driven by a singular focus on inquiry - with a firm belief in the value of open, rigorous, and intense inquiry and a common understanding that this must be the defining feature of this educational establishment. Everything about the High School that we recognize as distinctive flows from this commitment."</p> -->
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Page Footer-->
@endsection
