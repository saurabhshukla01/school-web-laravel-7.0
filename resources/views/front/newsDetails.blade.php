@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="news-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">News Detail</h1>
                  <ul>
                     <li>
                        <a class="active" href="index.html">Home</a>
                     </li>
                     <li>News Detail</li>
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
            @foreach($newses_id as $news)
              <div class="post-slide post-slide-detail">
                 <div class="post-img">
                    <img src="{{ url('adminView/img/news/'.$news->news_image) }}" alt="">
                    <small class="post-date text-secondary d-block mt-2 mb-2">
                      <span class="mr-4"><i class="fa fa-calendar mr-2"></i>{{ $news->news_date }} </span>
                      <span class="mr-4"><i class="fa fa-comments-o mr-2"></i>1,525</span>
                      <span class="mr-4"><i class="fa fa-user mr-2"></i>
                          &nbsp;
                          <span class="text-primary">
                             @if(!empty(Auth::guard('admin')->user()->name))
                              {{ Auth::guard('admin')->user()->name }}
                             @else
                                Vipin Kumar Pal
                             @endif 
                          </span>
                      </span>
                    </small>
                 </div>
                 <div class="post-review">
                    <h3 class="post-title">{{ $news->news_title }}</h3>
                    <p class="post-description">{{ $news->description }}</p>
                 </div>
              </div>
            @endforeach
            <span class="title-heading position-relative d-block pb-3 mb-4">Recent Comments</span>
            <div class="row mt-4">
               <div class="col-md-12 col-md-offset-2 col-sm-12">
                  <div class="comment-wrapper">
                     <div class="panel panel-info bg-none">
                        <div class="panel-body">
                           <textarea class="form-control" placeholder="write a comment..." rows="3"></textarea>
                           <br>
                           <button type="button" class="btn btn-info pull-right">Post</button>
                           <div class="clearfix"></div>
                           <hr>
                           <ul class="media-list">
                              <li class="media">
                                 <a href="#" class="pull-left">
                                 <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                 </a>
                                 <div class="media-body">
                                    <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                    </span>
                                    <strong class="text-dark">@MartinoMont</strong>
                                    <p>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                       Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                    </p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <span class="title-heading position-relative d-block mt-4 pb-3 mb-4">Latest News</span>
            <div class="row">
               <?php $i=0;?>
               @foreach($newses as $news)
               <?php if($i<2){?>
               <div class="col-md-6 top-event mb-2">
                  <div class="card p-3">
                     <img src="{{ url('adminView/img/news/'.$news->news_image) }}" alt="">
                     <div class="location mt-2">
                        <span><i class="fa fa-calendar mr-1" aria-hidden="true"></i> {{ $news->news_date }}</span>
                        <span class="pull-right"><i class="fa fa-user" aria-hidden="true"></i> 
                          &nbsp;&nbsp;
                          <span class="text-primary">
                             @if(!empty(Auth::guard('admin')->user()->name))
                              {{ Auth::guard('admin')->user()->name }}
                             @else
                                Vipin Kumar Pal
                             @endif 
                          </span>
                        </span>
                     </div>
                     <h6 class="title-heading position-relative d-block card-feature__title pt-3 pb-4"><a href="{{url('news-details/'.$news->id)}}" class="text-dark"><?php echo substr($news->news_title,0,90);?> ....</a></h6>
                     <div class="location sub-title mt-2 mb-4">
                        <span class="mr-4"><i class="fa fa-users mr-1" aria-hidden="true"></i> 1,254</span>
                        <span><i class="fa fa-comments-o mr-1" aria-hidden="true"></i> 3</span>
                        <span class="pull-right"><a class="theme-color" href="{{ url('news-details/'.$news->id)}}">Read More</a></span>
                     </div>
                  </div>
               </div>
               <?php } else{ break;} $i++; ?>
               @endforeach
            </div>
         </div>
         <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="event-post">
               <span class="title-heading position-relative d-block mt-4 pb-3 mb-4">Top News</span>
               <ul class="list-unstyled">
                @foreach($newses as $news)
                  <li><a href="{{url('news-details/'.$news->id)}}"><i class="fa fa-angle-right mr-2"></i>{{ $news->news_title }}</a></li>
                @endforeach
               </ul>
            </div>
            <div class="event-post1">
               <span class="title-heading position-relative d-block mt-4 pb-3 mb-4">News Categories</span>
               <div class="event-tag">
                  @foreach($newsCategories as $newsCategory)
                    <span><a href="#">{{ $newsCategory->name }}</a></span>
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