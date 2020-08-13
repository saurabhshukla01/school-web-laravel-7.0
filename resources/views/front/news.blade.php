@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="news-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">News</h1>
                  <ul>
                     <li>
                        <a class="active" href="index.html">Home</a>
                     </li>
                     <li>News</li>
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
      <div class="row event-body-content">
         @foreach($newses as $news)
         <div class="col-md-4 mb-4">
            <div class="card">
               <a href="{{url('news-details/'.$news->id)}}"><img class="card-img" src="{{ url('adminView/img/news/'.$news->news_image) }}" alt=""></a>
               <div class="card-body">
                  <h4 class="card-title font-weight-bold"><a href="{{url('news-details/'.$news->id)}}"><?php echo substr($news->news_title,0,90);?> ....</a></h4>
                  <small class="text-primary cat">
                  <i class="fa fa-list-alt text-danger mr-2"></i>
                  {{ $news->newscategory->name }}
                  </small>
                  <p class="card-text" style="font-size:13px;"><?php echo substr($news->description,0,380);?> .... </p>
                  <a href="{{url('news-details/'.$news->id)}}" class="outline-btn m-0">Read More</a>
               </div>
               <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0 pt-0">
                  <small class="views"><i class="fa fa-calendar mr-2"></i>{{ $news->news_date }}</small>
                  <small class="stats">
                  <span class="mr-3"><i class="fa fa-eye"></i> 1347</span>
                  <span><i class="fa fa-comment"></i> 12</span>
                  </small>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <div class="pull-right">
         <ul class="pagination pg-blue">
            <li class="page-item">
               {!! $newses->links() !!}
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