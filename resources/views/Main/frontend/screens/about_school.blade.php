@extends('main.frontend.web')
@section('content')
<div class="about-wrapper mt-sm-5 mt-3">
<div class="container g-0">
<div class="row g-0">
 <h3 class="about-us">About Us</h3>	
 <div class="col-md-5">
<div class="about-para">
<p>Conceived as a place where students learn about the world around them in a creative and modern way, International School is an inspiring environment for ambitious young people who strive towards high academic goals. In the modern world, which is constantly changing, it is necessary to keep up with the times and continuously adopt new knowledge. That is the very reason why we decided to merge global trends in teaching methodology, information technology and curriculum design.</p>
<p>By recognising and developing talents, fostering multidisciplinary knowledge, raising the level of culture and honing social skills, our school is given an advantage where the choice of secondary education is concerned. Not only is our teaching methodology contemporary but also our teachers, who, with a modern mindset, use mentoring to develop students’ intrinsic motivation and their need to advance through new knowledge.</p>
<p>Our modern building in downtown Belgrade is equipped with state-of-the-art teaching tools and interactive whiteboards. Spacious classrooms, an amphitheatre, a learning centre, and a recreation room provide students with a stimulating environment for an all-day stay. In the four years ahead, education at International School will be an exciting journey filled with exploration, friendship and fun. At this school, the students do not study because they have to, but because they want to!
<p>This is why International School is the right place for upper grades of primary and secondary education. This is a school where we learn, make friends, grow and evolve, a school where we cherish differences, where we know that work is what brings success, and that friendships mean investing in the future.</p>
</p></div>
</div>
<div class="col-md-3">
<div class="cambridge-banner mx-sm-3">
    <img src="{{asset('Main/frontend/images/cambridge-banner.png')}}" class="img-fluid">
</div>
</div>
<div class="col-md-4">
    <div class="accordion accordion-flush" id="accordionFlushUcs">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Admission
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              About the School
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
          </div>
        </div>
      </div>
</div>
</div>
</div>
</div>
@endsection