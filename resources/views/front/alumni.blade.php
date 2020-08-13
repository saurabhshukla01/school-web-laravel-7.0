@extends('layouts.frontLayout.frontLayout')
@section('content')
<!--Banner Start -->
<section class="alumni-banner">
   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
      <div class="breadcrumbs-inner">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="page-title">Alumni</h1>
                  <ul>
                     <li>
                        <a class="active" href="index.html">Home</a>
                     </li>
                     <li>Alumni</li>
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
      <span class="title-heading position-relative d-block pb-3 mb-4">Alumni</span>
        <div style="font-size:16px;font-family:verdana;margin:5%;">
          <p>Dear Alumnus,</p>
          <p>
            An alumni association or alumnae association (for women) is an association of graduates or, more broadly, of former students (alumni). In the United Kingdom and the United States, alumni of universities, colleges, schools (especially independent schools), fraternities, and sororities often form groups with alumni from the same organization. These associations often organize social events, publish newsletters or magazines, and raise funds for the organization. Many provide a variety of benefits and services that help alumni maintain connections to their educational institution and fellow graduates. In the US, most associations do not require its members to be an alumnus of a university to enjoy membership and privileges.
          </p>
          <p>
            Additionally, such groups often support new alumni, and provide a forum to form new friendships and business relationships with people of similar background.
          </p>
          <p>
            Alumni associations are mainly organized around universities or departments of universities, but may also be organized among students that studied in a certain country. In the past, they were often considered to be the university's or school's old boy society (or old boys network). Today, alumni associations involve graduates of all age groups and demographics.
          </p>
          <p>
            Alumni associations are often organized into chapters by city, region, or country.
          </p>
          <br/>
          <p>
            <span class="pull-right">
              Date : 20-10-2020
              <br/>
              published by indo.School.com
            </span>
            <span class="font-weight-bold">Mr. Santosh Kumar Sharma</span><br /> 
            <span style="text-decoration: line-through;font-family: cursive;color:red;"> Santoshsharma.</span>
            <br/>
            Msc , maths PHD Holder<br/>
           (Principal) 
          </p>
        </div>
      <div class="">
         <span class="title-heading position-relative d-block mt-4 pb-3 mb-4">Fill this form for Alumni Registration</span>
         <form id="contact-form" method="post" action="">
            <fieldset>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Name*</label>
                        <input name="name" id="name" class="form-control" type="text" autocomplete="off">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Email Id*</label>
                        <input name="email" id="email" class="form-control" type="email">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Contact Number*</label>
                        <input name="contactnumber" id="contactnumber" class="form-control" type="text">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Father Name *</label>
                        <input name="fathername" id="fathername" class="form-control" type="text">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>City*</label>
                        <input name="city" id="city" class="form-control" type="text">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Year of Admission *</label>
                        <select name="yearadmission" id="yearadmission" class="form-control">
                           <option>2020</option>
                           <option>2020</option>
                           <option>2020</option>
                           <option>2020</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Admission No.*</label>
                        <input name="admissionno" id="admissionno" class="form-control" type="text">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Class of Admission*</label>
                        <select name="yearadmission" id="yearadmission" class="form-control">
                           <option value="select">Select</option>
                           <option value="I">I</option>
                           <option value="II">II</option>
                           <option value="III">III</option>
                           <option value="IV">IV</option>
                           <option value="V">V</option>
                           <option value="VI">VI</option>
                           <option value="VII">VII</option>
                           <option value="VIII">VIII</option>
                           <option value="IX">IX</option>
                           <option value="X">X</option>
                           <option value="XI">XI</option>
                           <option value="XII">XII</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Registration Number*</label>
                        <input name="registrationnumber" id="registrationnumber" class="form-control" type="text">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Qualification*</label>
                        <input name="qualification" id="qualification" class="form-control" type="text">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-sm-12">
                     <div class="form-group">
                        <label>Year Of Leaving*</label>
                        <select name="yearadmission" id="yearadmission" class="form-control">
                           <option>2020</option>
                           <option>2020</option>
                           <option>2020</option>
                           <option>2020</option>
                        </select>
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
            <a href="contact-us.html" class="outline-btn">Contact Us</a>
         </div>
      </div>
   </div>
</section>
<!-- contact section -->
@endsection