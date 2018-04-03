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
        <h4 class="text-left text-bold" style="margin-bottom: 15px">Course Content</h4>
        <div class="text-subline"></div>
        <div class="offset-bottom-20 offset-top-20">
          <h6 class="text-left text-bold" style="margin-bottom: 15px">Week 1</h6>
          <ul class="list-inline list-inline-xs block-left text-left">
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Understanding the Classroom</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Child growth circle</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Child growth circle 2</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Classroom organization</span></a></li>
          </ul>
        </div>
        <div class="offset-bottom-20 offset-top-20">
          <h6 class="text-left text-bold" style="margin-bottom: 15px">Week 2</h6>
          <ul class="list-inline list-inline-xs block-left text-left">
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Understanding the Classroom</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Child growth circle</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Child growth circle 2</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Classroom organization</span></a></li>
          </ul>
        </div>
        <div class="offset-bottom-20 offset-top-20">
          <h6 class="text-left text-bold" style="margin-bottom: 15px">Week 3</h6>
          <ul class="list-inline list-inline-xs block-left text-left">
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Understanding the Classroom</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Child growth circle</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Child growth circle 2</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Classroom organization</span></a></li>
          </ul>
        </div>
        <div class="offset-bottom-20 offset-top-20">
          <h6 class="text-left text-bold" style="margin-bottom: 15px">Week 4</h6>
          <ul class="list-inline list-inline-xs block-left text-left">
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Understanding the Classroom</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Child growth circle</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Child growth circle 2</span></a></li>
            <li class="block-display"><a href="#"><span class="inset-left-10 text-dark">Classroom organization</span></a></li>
          </ul>
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
              <div class="offset-top-20 big-just">
                <p>This is a sample text. Dream alive academy.... The Classroom is where you can find all the resources and materials useful for supporting the institutions, parents, and students respectively. Here, you can read and download articles or books, take trainings and much later attend or host a Webinar.</p>
                <p>In the class room, everybody is ideally a student. This is because it contains resource materials for all our target users – Institutions, Parents/Guardians, and Students.</p>
                <p>The Classroom is where you can find all the resources and materials useful for supporting the institutions, parents, and students respectively. Here, you can read and download articles or books, take trainings and much later attend or host a Webinar.</p>
                <p>In the class room, everybody is ideally a student. This is because it contains resource materials for all our target users – Institutions, Parents/Guardians, and Students.</p>
              </div>
            </div>

            <div class="offset-top-40"></div>

            <div class="cell-md-12">
              <h4 class="text-bold">About the Instructor</h4>
              <div class="text-subline"></div>
              <div class="offset-top-20 big-just">
                <img src="{{asset('images/lecturer.jpg')}}" width="150" height="150" alt="" class="img-responsive" style="float: right; margin: 15px;">
                <p>This is a sample text. The Classroom is where you can find all the resources and materials useful for supporting the institutions, parents, and students respectively. Here, you can read and download articles or books, take trainings and much later attend or host a Webinar.</p>
                <p>In the class room, everybody is ideally a student. This is because it contains resource materials for all our target users – Institutions, Parents/Guardians, and Students.</p>
                <p>The Classroom is where you can find all the resources and materials useful for supporting the institutions, parents, and students respectively. Here, you can read and download articles or books, take trainings and much later attend or host a Webinar.</p>
                <p>In the class room, everybody is ideally a student. This is because it contains resource materials for all our target users – Institutions, Parents/Guardians, and Students.</p>
              </div>
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
