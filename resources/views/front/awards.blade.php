@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="alumni-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Awards</h1>
                  <ul>
                     <li>
                        <a class="active" href="{{ url('/')}}">Home</a>
                     </li>
                     <li>Awards</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Banner End -->
<section id="" class="news bg-light pt-5 pb-5">
   <div class="container">
      <span class="title-heading position-relative d-block pb-3 mb-4">Awards</span>
      <div class="row col-md-12">
         <div class="col-sm-6">
            <img src="{{ url('adminView/img/awards/award1.jpg') }}" style="width:500px;height:400px;">
            <h4 style="font-size: 18px;font-family: cursive;margin:5%;">
               Awards SSFHS Class of 2020 Virtual Senior Awards Ceremony set for May
            </h4>
         </div>
         <div class="col-sm-6">
            <img src="{{ url('adminView/img/awards/award2.jpg') }}" style="width:500px;height:400px;">
            <h4 style="font-size: 18px;font-family: cursive;margin:5%;">
               Watertown Highschool award and scholarship winners student award presented in 2019.
            </h4>
         </div>
         <div class="col-sm-6">
            <img src="{{ url('adminView/img/awards/award3.jpg') }}" style="width:500px;height:400px;">
            <h4 style="font-size: 18px;font-family: cursive;margin:5%;">
               College Preparatory School of America
               awards ceremony College Preparatory School of America
            </h4>
         </div>
         <div class="col-sm-6">
            <img src="{{ url('adminView/img/awards/award4.jpg') }}" style="width:500px;height:400px;">
            <h4 style="font-size: 18px;font-family: cursive;margin:5%;">
               Heritage Awarded 2020 CFA Grant Award Heritage Christian School
            </h4>
         </div>
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