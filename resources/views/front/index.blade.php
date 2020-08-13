@extends('layouts.frontLayout.frontLayout')
@section('content')
@include('layouts.frontLayout.frontSlider')
<!-- Slider Bottom -->
<section class="feature-section bg-light p-5">
   <div class="container">
      <div class="row">
         <div class="col-md-4 mb-3 mt-5 pt-3">
            <div class="card card-feature text-center text-center p-3">
               <span class="icon">
               <i class="fa fa-book fa-2x" aria-hidden="true" style="line-height: 120px;"></i>
               </span>
               <h4 class="card-feature__title">Books & Liberary</h4>
               <p>Best quotes about librarians, catalogers, and library and information professionals on what they do and why they are indispensable for society</p>
               <!--<a class="outline-btn m-auto w-50" href="">Read More</a>-->
            </div>
         </div>
         <div class="col-md-4 mb-3 mt-5 pt-3">
            <div class="card card-feature text-center text-center p-3">
               <span class="icon">
               <i class="fa fa-thumbs-up fa-2x" aria-hidden="true" style="line-height: 120px;"></i>
               </span>
               <h4 class="card-feature__title">Certified Teachers</h4>
               <p>Teaching requires significant formal education. Learn about the degree programs, job duties, career outlook and licensure requirements</p>
               <!--<a class="outline-btn m-auto w-50" href="">Read More</a>-->
            </div>
         </div>
         <div class="col-md-4 mb-3 mt-5 pt-3">
            <div class="card card-feature text-center text-center p-3">
               <span class="icon">
               <i class="fa fa-file-text-o fa-2x" aria-hidden="true" style="line-height: 120px;"></i>
               </span>
               <h4 class="card-feature__title">Certification</h4>
               <p>Teaching requires significant formal education. Learn about the degree programs, job duties, career outlook and licensure requirements</p>
               <!--<a class="outline-btn m-auto w-50" href="#">Read More</a>-->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Slider Bottom -->
<section class="video-area overlay-video bg-common-style" style="background-image: url({{ asset('frontView/images
   /1.jpg') }})">
   <div class="container">
      <div class="video-content">
         <h2 class="video-title">Watch Campus Life Video Tour</h2>
         <p class="video-sub-title">Everything's on your doorstep at Keele, with the most important <br> facilities gathered together at the centre of 
         </p>
         <a class="play-btn popup-video wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s" href="" style="visibility: visible; animation-duration: 2s; animation-delay: 0.1s; animation-name: bounceInUp;"><i class="fa fa-play" aria-hidden="true"></i></a>
         <span class="d-block mt-5">
         <a href="https://www.youtube.com/watch?v=wgeuO5awg8Q" class="outline-btn text-white">View More Videos</a>
         </span>
      </div>
   </div>
</section>
<!-- Event Section -->
<section class="event bg-white pt-5 pb-5">
   <div class="container">
      <div class="row">
         @foreach($upcomming_events as $event)
         <div class="col-md-6 top-event mb-2">
            <span class="title-heading position-relative d-block pb-3 mb-4">Top Event</span>
            <div class="card p-3">
               <a href="{{url('event-details/'.$event->id)}}"><img src="{{ url('adminView/img/events/'.$event->event_image ) }}" alt="" /></a>
               <div class="location mt-2 mb-4">
                  <span class="mr-4"><i class="fa fa-map-marker mr-1" aria-hidden="true"></i> {{ $event->event_location }}</span>
                  <span class="mr-4"><i class="fa fa-clock-o mr-1" aria-hidden="true"></i> {{ $event->start_time }} - {{ $event->end_time }}</span>
                  <span><i class="fa fa-calendar mr-1" aria-hidden="true"></i> {{ $event->event_date }}</span>
               </div>
               <h4 class="card-feature__title font-weight-bold"><a href="{{url('event-details/'.$event->id)}}" class="text-dark"><?php echo substr($event->event_title,0,72);?> ..</a></h4>
               <p style="font-size:14px;"><?php echo substr($event->description,0,320);?> ..</p>
               <a class="outline-btn text-center w-25" href="{{url('event-details/'.$event->id)}}">Read More</a>
            </div>
         </div>
         @endforeach
         <div class="col-md-6 mb-4 upcoming-event">
            <span class="title-heading position-relative d-block pb-3 mb-4">UpComing Event<a href="{{url('event')}}" class="pull-right theme-color">View All</a></span>
            <div class="row">
               @foreach($events as $event)
                  <div class="col-md-6 mb-4">
                     <div class="card p-3">
                        <a href="{{url('event-details/'.$event->id)}}"><img src="{{ url('adminView/img/events/'.$event->event_image ) }}" alt="" /></a>
                        <div class="location mt-2 mb-2">
                           <span class="mr-4"><i class="fa fa-clock-o mr-1" aria-hidden="true"></i> {{ $event->start_time }} - {{ $event->end_time }}</span>
                           <span><i class="fa fa-calendar mr-1" aria-hidden="true"></i> {{ $event->event_date }}</span>
                        </div>
                        <h4 class="card-feature__title"><a href="{{url('event-details/'.$event->id)}}" class="text-dark"><?php echo substr($event->event_title,0,60);?> ..</a></h4>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Event Section -->
<!-- Provide Section -->
<section class="provide-section pt-5 pb-5">
   <div class="container">
      <span class="title-heading position-relative d-block pb-3 mb-5">What We Provide?</span>
      <div class="row">
         <div class="col-md-4 text-center mb-5">
            <div class="provide1">
               <i class="fa fa-handshake-o fa-2x text-white" aria-hidden="true"></i>
            </div>
            <h4>Friendly Environment</h4>
            <p class="text-primary">Environment friendly processes, or environmental-friendly processes are sustainability and marketing terms referring to goods and services, laws, guidelines and policies that claim reduced, minimal, or no harm upon ecosystems or the environment.</p>
         </div>
         <div class="col-md-4 text-center mb-5">
            <div class="provide2">
               <i class="fa fa-line-chart fa-2x text-white" aria-hidden="true"></i>
            </div>
            <h4>Activity Rooms</h4>
            <p class="text-dark">The activity room is where the children can come in small groups and experience activities, interaction and any other planned activities.The activity room is, where the children can come in small groups and experience activities, interaction and any other planned activities.</p>
         </div>
         <div class="col-md-4 text-center mb-5">
            <div class="provide3">
               <i class="fa fa-music fa-2x text-white" aria-hidden="true"></i>
            </div>
            <h4>Art Music Group</h4>
            <p class="text-primary">The term "art music" refers primarily to classical traditions (including contemporary as well as historical classical music forms) that focus on formal styles, invite technical and detailed deconstruction and criticism, and demand focused attention from the listener.</p>
         </div>
         <div class="col-md-4 text-center mb-5">
            <div class="provide4">
               <i class="fa fa-book fa-2x text-white" aria-hidden="true"></i>
            </div>
            <h4>Full Day Sessions</h4>
            <p class="text-dark">Then, you ran out of time to answer questions, because you had to change session plan – also called a learning plan – is an organized description of the Last, a training session plan will be invaluable for a substitute instructor</p>
         </div>
         <div class="col-md-4 text-center mb-5">
            <div class="provide5">
               <i class="fa fa-futbol-o fa-2x text-white" aria-hidden="true"></i>
            </div>
            <h4>Play Games Areas</h4>
            <p class="text-primary">A playground, playpark, or play area is a place specifically designed to enable children to play Older children who would play vigorous games must have places especially play Articles with short description</p>
         </div>
         <div class="col-md-4 text-center mb-5">
            <div class="provide6">
               <i class="fa fa-users fa-2x text-white" aria-hidden="true"></i>
            </div>
            <h4>Experts Staff</h4>
            <p class="text-dark">IT specialist job description template, in control when it comes to finding the right information technology experts and establishing legal requirements for compliance purposes</p>
         </div>
      </div>
   </div>
</section>
<!-- Provide Section -->
<!-- Quote Section -->
<section class="p-5 quote position-relative" style="background:#1D1F20;">
   <div class="container">
      <div class="row">
         <div id="ct">
            <div class="corner" id="left_top"></div>
            <div class="corner" id="left_bottom"></div>
            <div class="corner" id="right_top"></div>
            <div class="corner" id="right_bottom"></div>
            <span class="quote-title">ALBERT EINSTEIN</span>
            <blockquote>
               <p class="quote-text"><i>&ldquo;Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid.&rdquo; </i></p>
            </blockquote>
         </div>
      </div>
   </div>
</section>
<!-- Quote Section -->
<!-- News Section-->
<section class="bg-light pt-5 pb-5">
   <div class="container">
      <span class="title-heading position-relative d-block pb-3 mb-4">Top News<a href="{{url('news')}}" class="pull-right theme-color">View All</a></span>
      <div id="owl-demo2" class="owl-carousel owl-theme">
         @foreach($top_newses as $news)
            <div class="item">
               <div class="card p-3">
                  <a href="{{url('news-details/'.$news->id)}}"><img src="{{ url('adminView/img/news/'.$news->news_image) }}" alt="" /></a>
                  <div class="location mt-2">
                     <span><i class="fa fa-calendar mr-1" aria-hidden="true"></i> {{ $news->news_date }}</span>
                     <span class="pull-right">
                        <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;
                        <span class="text-primary">
                           @if(!empty(Auth::guard('admin')->user()->name))
                            {{ Auth::guard('admin')->user()->name }}
                           @else
                              Vipin Kumar Pal
                           @endif 
                        </span>
                     </span>
                  </div>
                  <h6 class="title-heading position-relative d-block card-feature__title pt-3 pb-4"><a href="{{url('news-details/'.$news->id)}}" class="text-dark"><?php echo substr($news->news_title,0,90);?> ..</a></h6>
                  <div class="location sub-title mt-2 mb-4">
                     <span class="mr-4"><i class="fa fa-users mr-1" aria-hidden="true"></i> 1,254</span>
                     <span><i class="fa fa-comments-o mr-1" aria-hidden="true"></i> 3</span>
                     <span class="pull-right"><a class="theme-color" href="{{url('news-details/'.$news->id)}}">Read More</a></span>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</section>
<!--News Section-->
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
         </form>
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
@endsection