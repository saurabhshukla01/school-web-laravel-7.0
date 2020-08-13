@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="events-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Event Detail</h1>
                  <ul>
                     <li>
                        <a class="active" href="{{url('/')}}">Home</a>
                     </li>
                     <li>Event Detail</li>
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
         <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 mt-4">
            @foreach($events_id as $event)
            <div class="post-slide post-slide-detail">
               <div class="post-img">
                  <img src="{{ url('adminView/img/events/'.$event->event_image ) }}" alt="">
                  <small class="post-date text-secondary d-block mt-2 mb-2">
                  <span class="mr-4"><i class="fa fa-user mr-2"></i>{{ $event->event_date }}</span>
                  <span class="mr-4"><i class="fa fa-user mr-2"></i>{{ $event->start_time }} - {{ $event->end_time }}</span>
                  <span class="mr-4"><i class="fa fa-user mr-2"></i>{{ $event->event_location }}</span>
                  </small>
               </div>
               <div class="post-review">
                  <h3 class="post-title">{{ $event->event_title }}</h3>
                  <p class="post-description">{{ $event->description }}</p>
               </div>
            </div>
            @endforeach
            <span class="title-heading position-relative d-block pb-3 mb-4">Join Now</span>
            <div class="row">
               <div class="col-sm-12">
                  <form>
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="form-group">
                              <textarea class="form-control" rows="8" placeholder="Type Your Comments"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Name">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <input type="email" class="form-control" placeholder="Your E-mail">
                           </div>
                        </div>
                        <div class="col-sm-4">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Mobile Number">
                           </div>
                        </div>
                        <div class="col-sm-12">
                           <div class="full-width">
                              <input class="outline-btn m-0" value="Join Now" type="submit">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <span class="title-heading position-relative d-block mt-4 pb-3 mb-4">UpComing Events</span>
            <div class="row">
               <?php $i=0;?>
               @foreach($events as $event)
               <?php if($i<2){?>
               <div class="col-md-6 top-event mb-2">
                  <div class="card p-3">
                     <img src="{{ url('adminView/img/events/'.$event->event_image ) }}" alt="">
                     <div class="location mt-2 mb-4">
                        <span class="mr-4"><i class="fa fa-map-marker mr-1" aria-hidden="true"></i> {{ $event->event_location }}</span>
                        <span class="mr-4"><i class="fa fa-clock-o mr-1" aria-hidden="true"></i> {{ $event->start_time }} - {{ $event->end_time }}</span>
                        <span><i class="fa fa-calendar mr-1" aria-hidden="true"></i> {{ $event->event_date }}</span>
                     </div>
                     <h4 class="card-feature__title"><?php echo substr($event->event_title,0,90);?> ..</h4>
                     <p style="font-size:13px;"><?php echo substr($event->description,0,240);?> ..</p>
                     <a class="outline-btn text-center w-50" href="{{url('event-details/'.$event->id )}}">Read More</a>
                  </div>
               </div>
               <?php } else{ break;} $i++; ?>
               @endforeach
            </div>
         </div>
         <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="event-post">
               <span class="title-heading position-relative d-block mt-4 pb-3 mb-4">UpComing Events</span>
               <ul class="list-unstyled">
                  @foreach($events as $event)
                  <li><a href="{{url('event-details/'.$event->id) }}"><i class="fa fa-angle-right mr-2"></i>{{ $event->event_title }} </a></li>
                  @endforeach
               </ul>
            </div>
            <div class="event-post1">
               <span class="title-heading position-relative d-block mt-4 pb-3 mb-4">Event Categories</span>
               <div class="event-tag">
                  @foreach($eventCategories as $eventCategory)
                     <span><a href="#">{{ $eventCategory->name }}</a></span>
                  @endforeach
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