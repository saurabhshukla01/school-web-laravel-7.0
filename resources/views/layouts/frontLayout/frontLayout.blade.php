<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>School</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="{{ url('frontView/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ url('frontView/font-awesome/css/font-awesome.min.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ url('frontView/css/animate.css') }}" />
      <link href="{{ url('frontView/css/owl.carousel.min.css') }}" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="{{ url('frontView/css/style.css') }}" />
      <link rel="stylesheet" type="text/css" href="{{ url('frontView/css/responsive.css') }}" />
   </head>
   <body>
      <!--Full width header Start-->
      @include('layouts.frontLayout.frontTitle')
      <!--Header Start-->
      @include('layouts.frontLayout.frontHeader')
      <!--Header End-->
      <!--Banner Start -->
      <!--Banner End -->
      @yield('content')
      <!-- Footer Start -->
      @include('layouts.frontLayout.frontFooter')
      <!-- Footer End -->
      <script src="{{ url('frontView/js/jquery.min.js') }}"></script>
      <script src="{{ url('frontView/js/bootstrap.min.js') }}"></script>
      <script src="{{ url('frontView/js/script.js') }}"></script>
      <script src="{{ url('frontView/js/owl.carousel.min.js') }}"></script>
      <script>
         $(document).ready(function () {
         $("#owl-demo").owlCarousel({
           items : 1, //10 items above 1000px browser width
             itemsDesktop : [1000,1], //5 items between 1000px and 901px
             itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
             itemsTablet: [600,1],
           pagination : true,
           navigation : true,
           autoplay : true,
           loop : true,
         });
         $("#owl-demo2").owlCarousel({
           pagination : true,
           navigation : true,
           responsiveClass:true,
           responsive:{
               0:{
                   items:1,
                   nav:true
               },
               600:{
                   items:2,
                   nav:false
               },
               1000:{
                   items:3,
                   nav:true,
                   loop:true
               }
           },
           margin : 20,
           loop :true,
           autoplay : true,
         });
         });
      </script>
   </body>
</html>