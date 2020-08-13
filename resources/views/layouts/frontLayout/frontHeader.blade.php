<header class="bg-light">
   <div class="container">
      <div class="row">
         <div class="col-md-2 col-sm-12">
            <div class="logo-area pt-3 pb-3">
               <a href="index.html"><img src="{{ url('frontView/images/logo.png')}}" alt="logo"></a>
            </div>
         </div>
         <div class="col-md-10">
            <nav class="navbar navbar-expand-md navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto py-4 py-md-0">
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                     </li>
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="{{ url('about')}}">About Us</a>
                     </li>
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="{{url('news')}}">News</a>
                     </li>
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="{{url('event')}}">Events</a>
                     </li>
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="{{ url('gallary') }}">Gallary</a>
                     </li>
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="{{ url('notification') }}">Notification</a>
                     </li>
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Resource</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="{{ url('awards') }}">AWARDS</a>
                           <a class="dropdown-item" href="{{ url('alumni') }}">ALUMNI</a>
                        </div>
                     </li>
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="{{url('fee-structure') }}">Fee Structure</a>
                           <a class="dropdown-item" href="{{ url('faq') }}">Faq</a>
                           <a class="dropdown-item" href="{{url('staff')}}">Teacher</a>
                           <a class="dropdown-item" href="{{url('carrier')}}">Carrier</a>
                        </div>
                     </li>
                     <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
</header>