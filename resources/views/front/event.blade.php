@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="events-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Events</h1>
                  <ul>
                     <li>
                        <a class="active" href="{{url('/')}}">Home</a>
                     </li>
                     <li>Events</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Banner End -->
<section id="" class="events bg-light pt-5 pb-5">
   <div class="container">
      <div class="row event-body-content">
         @foreach($events as $event)
         <div class="col-sm-12 events-full-box">
            <div class="events-single-box">
               <div class="row">
                  <div class="col-sm-4 single-box-img">
                     <img src="{{ url('adminView/img/events/'.$event->event_image ) }}" alt="" class="img-responsive">
                  </div>
                  <div class="col-sm-8 event-info pt-3">
                     <h4 class="font-weight-bold"><?php echo substr($event->event_title,0,100);?></h4>
                     <p class="events-time small">
                        <span>
                        <i class="fa fa-calendar event-icon"></i>
                        {{ $event->event_date }}
                        </span>
                        <span>
                        <i class="fa fa-clock-o event-icon"></i>
                        {{ $event->start_time }} - {{ $event->end_time }}
                        </span>
                        <span>
                        <i class="fa fa-map-marker event-icon"></i>
                        {{ $event->event_location }}
                        </span>
                     </p>
                     <p style="font-size:14px;"><?php echo substr($event->description,0,380); ?> ....</p>
                     <a class="outline-btn m-0" href="events-detail.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="pull-right">
         <ul class="pagination pg-blue">
            <li class="page-item">
              {!! $events->links() !!}
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