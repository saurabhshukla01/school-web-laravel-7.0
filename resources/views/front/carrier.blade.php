@extends('layouts.frontLayout.frontLayout')
@section('content')
	<!--Banner Start -->
    <section class="career-banner">
        <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Career</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Career</li>
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
         <span class="title-heading position-relative d-block pb-3 mb-4">We're Hiring! Teacher Staff Please Apply Here</span>
         <div class="">
            <div class="row">
                <div class="col-md-12 mb-4">
                  <p style="font-size:18px;">Presenting lessons in a comprehensive manner and use visual/audio means to facilitate learning Providing individualized instruction to each student by promoting interactive learning Creating and distributing educational content</p>
                  <p style="font-size:18px;">
                      qualified workforce of educators. You will be responsible for preparing and implementing a full educational teaching plan according to the school’s requirements. It will be fundamental to provide knowledge and instruction to students while also helping them develop their personalities and skills.
                  </p>
                  <p style="font-size:18px;">
                      The ideal candidate will be passionate for the job with an ability to reach out to students and create a relationship of mutual trust. They will know how to organize a class and make learning an easy and meaningful process.
                  </p>
                  <p style="font-size:18px;">
                      The goal is to help cultivate the students’ interest in education and be their dedicated ally in the entire process of learning and development.
                  </p>
                </div>
                @foreach($subjectcategories as $subjectcategory)
                <div class="col-md-4 mb-3 mt-5 pt-3">
                  <div class="card card-feature text-center text-center p-3">
                    <span class="icon"><i class="fa fa-book fa-2x" aria-hidden="true" style="line-height: 120px;"></i></span>
                    <h4 class="card-feature__title">{{ $subjectcategory->subject_name }} Teacher</h4>
                    <p style="font-size:13px;"><?php echo substr($subjectcategory->description,0,115);?> ..</p>
                    <a class="outline-btn m-auto w-50" href="career-apply-now.html">Apply Now</a>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="pull-right">
                <ul class="pagination pg-blue">
                  <li class="page-item">
                    {!! $subjectcategories->links() !!}
                  </li>
                </ul>
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