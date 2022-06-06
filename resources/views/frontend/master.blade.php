<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('frontend/css/normalize-and-boilerplate.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />

    <script src="{{asset('frontend/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
  </head>
  <body>


    <!-- start: header -->
    @include('frontend.includes.header')
    <!-- end: header -->

    @yield('content')
    
    <!-- start: footer -->
    @include('frontend.includes.footer')
    <!-- end: footer -->


    <!-- start: copyright -->
    @include('frontend.includes.footer-copyright')
    <!-- end: copyright -->


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

    <script src="{{asset('frontend/js/plugins.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src='//www.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>