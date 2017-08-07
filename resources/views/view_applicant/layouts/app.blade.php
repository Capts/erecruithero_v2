<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('view_applicant.partials.head')
</head>
<body class="hold-transition skin-green sidebar-mini">
    <div id="app">
       {{-- @include('view_applicant.partials.nav') --}}

        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('applicant/js/app.js') }}"></script>

    <script src="/applicant/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/applicant/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/applicant/dist/js/demo.js"></script>

    <!-- Javascript files-->
    <script src="/applicant/js/jquery.min.js"></script>
    <script src="/applicant/applicanthome/js/jquery.cookie.js"> </script>
    <script src="/applicant/applicanthome/js/ekko-lightbox.js"></script>
    <script src="/applicant/applicanthome/js/jquery.simple-text-rotator.min.js"></script>
    <script src="/applicant/applicanthome/js/jquery.scrollTo.min.js"></script>
    <script src="/applicant/applicanthome/js/owl.carousel.min.js"></script>
    <script src="/applicant/applicanthome/js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</body>
</html>
