@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="faq-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Faq</h1>
                  <ul>
                     <li>
                        <a class="active" href="{{ url('/') }}">Home</a>
                     </li>
                     <li>Faq</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Banner End -->
<section id="" class="news bg-light pl-3 pr-3 pt-5 pb-5">
   <div class="container">
      <div class="row">
         <span class="w-100 title-heading position-relative d-block pb-3 mb-4">Ask & Questions</span>
         <p>When we start to work with you, you immediately start to benefit from a Membership. During the life of your 3 Year Membership we regularly release updates to the system, adding new, exciting and highly useful features to make your life easier and your school website more creative. Any new features are provided as part of your membership. You won’t be asked to pay a premium for new features and you won’t have to wait for your next upgrade.</p>
      </div>
      <div class="row">
         <div id="accordion" class="myaccordion w-100">
            <span class="title-heading position-relative d-block pb-3 mb-4">Why a three year package?</span>
            <div class="card mb-3">
               <div class="card-header p-0" id="headingOne">
                  <h2 class="mb-0">
                     <button class="faq-btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     If I want to keep my current site after three years can I just pay the support and hosting?
                     <span class="float-right">
                     <i class="fa fa-minus fa-inverse"></i>
                     </span>
                     </button>
                  </h2>
               </div>
               <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     Unfortunately not; cards on the table time. If we did that, we would then need to accurately manage which clients had access to which new features as we build and release them. The sheer number of feature releases and product updates means this would become unmanageable on a client-by-client basis within the current, highly competitive price range we offer. Your price would go up and the service would go down and that’s not something we’ll allow to happen.
                  </div>
               </div>
            </div>
            <div class="card mb-3">
               <div class="card-header p-0" id="headingTwo">
                  <h2 class="mb-0">
                     <button class="faq-btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     What happens if I decide to leave after three years?
                     <span class="float-right">
                     <i class="fa fa-plus fa-inverse"></i>
                     </span>
                     </button>
                  </h2>
               </div>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                     We obviously hope that you would never want to leave us, and we work hard to make sure you don’t. An example of that is that one of our Directors will personally check your website every six months to make sure you’re making the most of your website. However, if you decide to leave, all the site content will be yours to transfer to your new provider. The system is unfortunately not transferrable to another provider as it is our own, bespoke system, built specifically for the education sector.
                  </div>
               </div>
            </div>
            <div class="card mb-3">
               <div class="card-header p-0" id="headingThree">
                  <h2 class="mb-0">
                     <button class="faq-btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Why do I have to pay before my site goes live?
                     <span class="float-right">
                     <i class="fa fa-plus fa-inverse"></i>
                     </span>
                     </button>
                  </h2>
               </div>
               <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                     There is a significant amount of work involved in setting up your new school website, something that we are extremely efficient at handling quickly and professionally. We will ensure you are happy with the end product before the site goes live. All we ask is that the payment for your new website made before we ‘flick the switch’
                  </div>
               </div>
            </div>
            <div class="card mb-3">
               <div class="card-header p-0" id="headingOne">
                  <h2 class="mb-0">
                     <button class="faq-btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                     What site changes are included within support?
                     <span class="float-right">
                     <i class="fa fa-minus fa-inverse"></i>
                     </span>
                     </button>
                  </h2>
               </div>
               <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                     During the set-up process we will make colour, graphic design and content changes without additional charge. Some may incur a small development fee which would be agreed with your Account Manager but don’t let that scare you! We try very hard to make sure we don’t ask for any extra money because we know times are tight and we don’t want to keep asking for money, that’s not who we are. After we have successfully launched your new website any design or structural amends are charged at the Standard Per Hour Development Rate.
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <span class="w-100 title-heading position-relative d-block mt-5 pb-3 mb-5">Didn't find the answer? Write us...</span>                
         <form id="contact-form" class="w-100" method="post" action="">
            <fieldset>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>First Name*</label>
                        <input name="fname" id="fname" class="form-control" type="text" autocomplete="off">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Last Name*</label>
                        <input name="lname" id="lname" class="form-control" type="text">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Email*</label>
                        <input name="email" id="email" class="form-control" type="email">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Subject *</label>
                        <input name="subject" id="subject" class="form-control" type="text">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="form-group">
                        <label>Message *</label>
                        <textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
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
            <a href="{{ url('contact')}}" class="outline-btn">Contact Us</a>
         </div>
      </div>
   </div>
</section>
<!-- contact section -->
@endsection