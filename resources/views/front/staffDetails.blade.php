@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="teacher-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Teacher Detail</h1>
                  <ul>
                     <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                     </li>
                     <li>Teacher Detail</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Banner End -->
<section id="" class="teacher-detail bg-light pt-5 pb-5">
   <div class="container">
      @foreach($staffs as $staff)
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 teacher-detail-left">
            <div class="text-center border">
               <img src="{{ url('adminView/img/teacher/'.$staff->teacher_image ) }}" class="img-responsive" alt="team">
               <h3 class="mt-3 mb-2">{{ $staff->teacher_name }}</h3>
               <h4>{{ $staff->subjectcategory->subject_name }}</h4>
               <ul class="social">
                  <li><a href="https://google.com"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.linkedin.com/login"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="https://www.facebook.com/login"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               </ul>
            </div>
            <ul class="contact-info">
               <li><a href="https://play.google.com/store/apps/details?id=v.d.d.answercall&hl=en_IN"><i class="fa fa-phone mr-2" aria-hidden="true"></i>+91 {{ $staff->mobile }} </a></li>
               <li><a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i>{{ $staff->teacher_email }}</a></li>
            </ul>
         </div>
         <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 teacher-detail-right">
            <span class="title-heading position-relative d-block pb-3 mb-4">About Me</span>
            <p>{{ $staff->about_me }}</p>
            <span class="title-heading position-relative d-block pb-3 mb-4">Qualifications</span>
            <ul class="">
               <li>{{ $staff->qualification }}</li>
            </ul>
            <div class="leave-comments">
               <span class="title-heading position-relative d-block pb-3 mt-4 mb-4">Contact with me</span>
               <form id="" class="w-100" method="post" action="">
                  <fieldset>
                     <div class="row">
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">
                              <label>Name*</label>
                              <input name="name" id="name" class="form-control" type="text" autocomplete="off">
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                           <div class="form-group">
                              <label>E-mail*</label>
                              <input name="email" id="email" class="form-control" type="email">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-sm-12">
                           <div class="form-group">
                              <label>Message *</label>
                              <textarea cols="20" rows="5" id="message" name="message" class="textarea form-control"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="form-group mb-0">
                        <input class="outline-btn" type="submit" value="Submit Now">
                     </div>
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
      @endforeach
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