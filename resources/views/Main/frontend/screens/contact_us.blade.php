@extends('main.frontend.web')
@section('content')
<div class="container-fluid g-0">
    <div class="row g-0">
    <div class="contact-wrapper text-center">
        <h3 class="contact-head px-2 px-sm-0 pt-4 ">Contact Us</h3>	
    <div class="container g-0">
    <form class="contact-form mx-md-5 mx-2 mt-4 pb-4 pt-2 px-4 mb-2">
        @csrf
        <div class="mb-4 mt-3 px-2 px-0 d-lg-flex">
            <input type="text"  class="form-control  mb-lg-0 me-0 mb-4" id="name" placeholder="Name" name="name">
            <input type="email" class="form-control ms-lg-2 ms-0" id="email" placeholder="Email" name="email">          
        </div>
        <div class="mb-4 px-2  d-lg-flex num" >
            <input type="text" class="form-control mb-lg-0 me-lg-3 me-0 mb-4"  id="number" placeholder="Phone Number" name="number" size="20" >    
        </div>
        <div class="px-2 d-lg-flex">
            <textarea class="form-control mb-lg-0 me-lg-3 me-0 mb-4 " rows="4" id="message" placeholder="Enter Message" name="message"></textarea>
        </div>
            <button type="submit" class="btn btn-primary send-btn  px-5 py-1 mt-4 mb-2" id="myBtn">Send</button>
    </form>
</div>
    </div>
</div>
</div>
@endsection