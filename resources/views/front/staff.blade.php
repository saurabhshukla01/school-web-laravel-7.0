@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="teacher-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Our Awosome Teacher</h1>
                  <ul>
                     <li>
                        <a class="active" href="{{url('/')}}">Home</a>
                     </li>
                     <li>Our Teacher</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Banner End -->
<section id="" class="teacher bg-light pt-5 pb-5">
   <div class="container">
      <div class="row">
         @foreach($staffs as $staff)
         <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="card">
               <div class="card-body">
                  <a href="{{url('staff-details/'.$staff->id)}}"><img src="{{ url('adminView/img/teacher/'.$staff->teacher_image ) }}" alt="#"></a>
               </div>
               <div class="card-footer text-center">
                  <h4 class="name text-danger">Teacher Name : <strong class="text-primary">{{ $staff->teacher_name }}</strong></h4>
                  <h4 class="name text-danger">Teacher Email : <strong class="text-primary">{{ $staff->teacher_email }}</strong></h4>
                  <h6 class="font-weight-bold text-primary">{{ $staff->subjectcategory->subject_name }} Teacher</h6>
                  <ul class="social">
                     <li><a href="https://www.facebook.com/login"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="https://google.com"><i class="fa fa-google-plus"></i></a></li>
                     <li><a href="https://www.linkedin.com/login"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="row pull-right">
         <ul class="pagination pg-blue">
            <li class="page-item">
               {!! $staffs->links() !!}
            </li>
         </ul>
      </div>
   </div>
</section>
<!-- Newsletter Section -->
<section class="newsletter">
   <div class="container">
      <div class="newsletter-container">
         <h3 class="mb-3 text-center">Subscribe to our monthly newsletter</h3>
         <p class="text-justify">Signup for our weekly newsletter to get the latest news, updates and amazing offers deliverd directly in your inbox.</p>
         <form>
         <div class="form-group">
            <input type="email" class="form-control" placeholder="Enter Email">
            <button class="outline-btn mt-3" type="button">Subscribe Now</button>
         </div>
      </div>
   </div>
</section>
<!-- Newsletter Section -->
<!-- contact section -->
<section class="bg-dark contact-us-section p-5" style="color: rgba(256,256,256,0.3);">
   <div class="container">
      <div class="row">
         <div class="colom d-flex">
            <span class="contact-us-icon pt-2">
            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
            </span>
            <div class="contact-us-text ml-4">
               <span class="d-block">Address</span>
               <span>Street number 5</span>
            </div>
         </div>
         <div class="colom d-flex">
            <span class="contact-us-icon pt-2">
            <i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
            </span>
            <div class="contact-us-text ml-4">
               <span class="d-block">E-mail</span>
               <span>info@domainname.com</span>
            </div>
         </div>
         <div class="colom d-flex">
            <span class="contact-us-icon pt-2">
            <i class="fa fa-volume-control-phone fa-2x" aria-hidden="true"></i>
            </span>
            <div class="contact-us-text ml-4">
               <span class="d-block">Telephone</span>
               <span>1256 6541 555</span>
            </div>
         </div>
         <div class="colom d-flex">
            <span class="contact-us-icon pt-2">
            <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
            </span>
            <div class="contact-us-text ml-4">
               <span class="d-block">Open Hours</span>
               <span class="d-block">Mon - Sat</span>
               <span>09:00am - 03:00pm</span>
            </div>
         </div>
         <div class="colom text-right">
            <a href="contact-us.html" class="outline-btn">Contact Us</a>
         </div>
      </div>
   </div>
</section>
<!-- contact section -->
@endsection