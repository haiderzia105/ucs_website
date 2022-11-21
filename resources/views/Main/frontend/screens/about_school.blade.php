@extends('main.frontend.web')
@section('content')
<div class="about-wrapper mt-sm-5 mt-3">
<div class="container g-0">
<div class="row g-0">
 <h3 class="about-us px-2 px-sm-0">About Us</h3>	
 <div class="col-md-5">
<div class="about-para mx-2 mx-sm-0">
<p>Conceived as a place where students learn about the world around them in a creative and modern way, International School is an inspiring environment for ambitious young people who strive towards high academic goals. In the modern world, which is constantly changing, it is necessary to keep up with the times and continuously adopt new knowledge. That is the very reason why we decided to merge global trends in teaching methodology, information technology and curriculum design.</p>
<p>By recognising and developing talents, fostering multidisciplinary knowledge, raising the level of culture and honing social skills, our school is given an advantage where the choice of secondary education is concerned. Not only is our teaching methodology contemporary but also our teachers, who, with a modern mindset, use mentoring to develop students’ intrinsic motivation and their need to advance through new knowledge.</p>
<p>Our modern building in downtown Belgrade is equipped with state-of-the-art teaching tools and interactive whiteboards. Spacious classrooms, an amphitheatre, a learning centre, and a recreation room provide students with a stimulating environment for an all-day stay. In the four years ahead, education at International School will be an exciting journey filled with exploration, friendship and fun. At this school, the students do not study because they have to, but because they want to!
<p>This is why International School is the right place for upper grades of primary and secondary education. This is a school where we learn, make friends, grow and evolve, a school where we cherish differences, where we know that work is what brings success, and that friendships mean investing in the future.</p>
</p></div>
<div class="enrollment my-4">
  <div class="container">
      <div class="d-flex">
          <img src="{{asset('Main/frontend/images/ucs_logo.svg')}}" class="img-fluid">
          <div class="d-inline ms-sm-3 mt-3">
              <h4>Enrollment for class 2023/24 is underway!</h4>
              <div class="d-flex">
              <a href="#">Click here to register</a>
              <i class="fa fa-forward ms-2 mt-2" aria-hidden="true" style="color: red"></i>	 
              </div>
          </div>
  </div>
</div>
</div>
</div>
<div class="col-md-3">
<div class="cambridge-banner mx-sm-3 my-2 my-md-0">
    <img src="{{asset('Main/frontend/images/cambridge-banner.png')}}" class="img-fluid">
</div>
</div>
<div class="col-md-4">
  <div class="accordion accordion-flush" id="accordionAbout">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Admission
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
          <li><a href=""><strong>Admission Process</strong></a></li>
          <li><a href=""><strong>Admission Office</strong></a></li>
          <li><a href=""><strong>Enrolment Benefits</strong></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          About the School
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
            <li><a href=""><strong>Accrediation</strong></a></li>
            <li><a href=""><strong>Mission and Vision</strong></a></li>
            <li><a href=""><strong>Policy and Regulations</strong></a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Programs
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
            <li><a href=""><strong>The Diploma curriculum</strong></a></li>
            <li><a href=""><strong>Fees for Programme</strong></a></li>
            <li><a href=""><strong>Learner profile</strong></a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Technology in use
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
            <li><a href=""><strong>eLEARNING</strong></a></li>
            <li><a href=""><strong>Tablets for learning</strong></a></li>
            <li><a href=""><strong>How to use the Platform for Students</strong></a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          For parents
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionAbout">
        <div class="accordion-body">
          <ul class="px-0">
            <li><a href=""><strong>Progress Reports</strong></a></li>
            <li><a href=""><strong>E-diary</strong></a></li>
            <li><a href=""><strong>Safe Environment</strong></a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>

  {{-- sign up form  --}}

  <form class="about-signup mx-3 px-2 py-4">
    <p class="text-center"><b>Sign up for the “The right school for a bright future” newsletter for free.</b></p>
    <div class="mb-3 mt-3">
      <label for="AboutEmail" class="form-label">Your Email</label>
      <input type="email" class="form-control" id="AboutEmail" placeholder="Email">
    </div>
    <div class="mb-3">
      <label for="AboutName" class="form-label">Your Name</label>
      <input type="name" class="form-control" id="AboutName" placeholder="Name">
    </div>
    <button type="submit" class="btn btn-primary">Subscribe</button>
  </form>

  <div class="about-banner-group ">
  <div class="image my-3">
    <img src="{{asset('Main/frontend/images/enroll.jpg')}}" class="img-fluid px-5"> 
  </div>
  <div class="image-one my-3">
    <img src="{{asset('Main/frontend/images/about-banner-one.png')}}" class="img-fluid px-5"> 
  </div>
  <div class="image-two my-3">
    <img src="{{asset('Main/frontend/images/about-banner-two.png')}}" class="img-fluid px-5"> 
  </div>
  <div class="image-three my-3">
    <img src="{{asset('Main/frontend/images/about-banner-three.png')}}" class="img-fluid px-5"> 
  </div>
  </div>


</div>
</div>
</div>
</div>
@endsection