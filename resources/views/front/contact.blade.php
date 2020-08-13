@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
    <section class="contact-us-banner">
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Contact Us</h1>
                        <ul>
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>Contact Us</li>
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
          <div class="row text-center contact-address-section">
              <div class="col-md-4 mb-2">
                  <div class="bg-white border contact-address p-4">
                      <i class="fa fa-map-marker theme-color fa-2x mb-3"></i>
                      <h4>Address</h4>
                      <p>503  Old Buffalo Street<br/>
                        Northwest #205, New York-3087</p>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="bg-white border contact-address p-4">
                        <i class="fa fa-phone theme-color fa-2x mb-3"></i>
                        <h4>Phone Number</h4>
                        <a href="tel:+123456789">+123456789</a>
                        <a href="tel:+123456789">+123456789</a>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="bg-white border contact-address p-4">
                        <i class="fa fa-envelope theme-color fa-2x mb-3"></i>
                        <h4>Email Address</h4>
                        <span>
                            <a href="mailto:infoname@gmail.com">infoname@gmail.com</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12">
                    <span class="title-heading position-relative d-block pb-3 mb-4">Leave Comment</span>
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="">
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