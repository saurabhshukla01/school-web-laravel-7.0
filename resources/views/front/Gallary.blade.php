@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="gallery-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Gallery</h1>
                  <ul>
                     <li>
                        <a class="active" href="index.html">Home</a>
                     </li>
                     <li>Gallery</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Banner End -->
<section id="gallery" class="bg-light pt-5 pb-5">
   <div class="container">
      <div class="tab-pane">
         <div class="tab-pane-list">
            <a class="projects_select tab-link current" data-tab="photo-gallery">Photo Gallery</a>
            <a class="projects_select tab-link" data-tab="video-gallery">Video Gallery</a>
         </div>
      </div>
      <div id="photo-gallery" class="tab-content current">
         <ul id="lightgallery" class="list-unstyled row">
            <div class="col-md-12">
               <span class="title-heading position-relative d-block pb-3 mb-4">School Gallary Images</span> 
            </div>
            @foreach($gallaries as $gallary)
            <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-4" data-responsive="{{ url('adminView/img/school_gallary/'.$gallary->gallary_image) }}" data-src="{{ url('adminView/img/school_gallary/'.$gallary->gallary_image) }}" data-sub-html="Banner Title">
               <a href="{{ url('adminView/img/school_gallary/'.$gallary->gallary_image) }}" class="p-2 d-block bg-white border overflow-hidden">
                  <span class="zoominbox">
                     <img class="img-responsive zoomboximg" src="{{ url('adminView/img/school_gallary/'.$gallary->gallary_image) }}" alt="">
                     <span class="zoominDiv">
                        <span class="zoomicon"><i class="fa fa-search-plus fa-2x mb-3" aria-hidden="true"></i></span>
                        <h4>{{ $gallary->image_title }}</h4>
                     </span>
                  </span>
               </a>
            </li>
            @endforeach
         </ul>
      </div>
      <div id="video-gallery" class="tab-content">
         <!-- Hidden video div -->
         <!--<div style="display:none;" id="video1">
            <video class="lg-video-object lg-html5" controls="" preload="none">
               <source src="#" type="video/mp4">
               Your browser does not support HTML5 video.
            </video>
         </div>-->
         <!-- data-src should not be provided when you use html5 videos -->
         <div class="video-thumb">
            <ul id="html5-videos" class="list-unstyled row">
               <div class="col-md-12">
                  <span class="title-heading position-relative d-block pb-3 mb-4">School Gallary Videos</span> 
               </div>
               @foreach($gallaries as $gallary)
               @if(!empty($gallary->gallary_video))
               <li class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-4" data-poster="{{ url('adminView/img/school_gallary/'.$gallary->gallary_image) }}" data-sub-html="video caption1" data-html="#video{{$gallary->id}}">
                  <a href="{{ url('adminView/videos/'.$gallary->gallary_video) }}" class="p-2 d-block bg-white border overflow-hidden" target="_blank">
                     <span class="zoominbox">
                        <img class="img-responsive zoomboximg" src="{{ url('adminView/img/school_gallary/'.$gallary->gallary_image) }}" alt="">
                        <span class="zoominDiv">
                           <i class="fa fa-search-plus fa-2x mb-3" aria-hidden="true"></i>
                           <h4>{{ $gallary->image_title }}</h4>
                        </span>
                     </span>
                  </a>
               </li>
               @endif
               @endforeach
            </ul>
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