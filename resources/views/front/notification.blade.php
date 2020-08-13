@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="notification-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Notification</h1>
                  <ul>
                     <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                     </li>
                     <li>Notification</li>
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
      <div class="row">
         <div class="col-md-12">
            <span style="font-size:18px;">Latest School Releated Notifications</span>
            <hr>
            <div class="d-inline-block w-100 border mt-4 mb-4">
               <div class="d-inline-block w-25 float-left">
                  <div class="text-center date-body m-2">
                     <span class="date-title">Friday</span>
                     <span class="dia">25</span>
                     <span class="">May 2020</span>
                  </div>
               </div>
               <div class="w-75 p-2 float-left">
                  <strong class="font-weight-bold">ON-LINE CLASSES</strong>
                  <p style="font-size:13px;">An online class is a course conducted over the Internet. They are generally conducted through a learning management system, in which students can view their course syllabus and academic progress, as well as communicate with fellow students and their course instructor.</p>
                  <p style="font-size:13px;">
                     An online class is a course conducted over the Internet. They are generally conducted through a learning management system, in which students can view their course syllabus and academic progress, as well as communicate with fellow students and their course instructor.
                  </p>
               </div>
            </div>
            <div class="d-inline-block w-100 border mt-4 mb-4">
               <div class="d-inline-block w-25 float-left">
                  <div class="text-center date-body m-2">
                     <span class="date-title">Monday</span>
                     <span class="dia">29</span>
                     <span class="">June 2020</span>
                  </div>
               </div>
               <div class="w-75 p-2 float-left">
                  <strong class="font-weight-bold">School Jobs 2020</strong>
                  <p style="font-size:13px;">School Jobs 2020 : Apply online to 3,316 Latest School Jobs August 2020 Vacancies across India. Upload your resume and subscribe to School Jobs Vacancies in School 2020 to know immediately about the latest School Recruitment 2020 notification for both fresher's and experienced candidates.</p>
                  <p style="font-size:13px;">
                     Find Newly announced School Jobs 2020 Vacancy across India first on Fresherslive.
                  </p>
               </div>
            </div>
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