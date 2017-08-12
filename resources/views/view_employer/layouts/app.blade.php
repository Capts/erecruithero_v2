<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('view_employer.partials.head')
</head>
<body class="hold-transition skin-green sidebar-mini">
    <div id="app">
        @include('view_employer.job.create_job_modal')
        
        @yield('content')
    </div>
    {{-- @include('view_employer.partials.footer') --}}

    <!-- Scripts -->
    <script src="{{ asset('applicant/js/app.js') }}"></script>

    <script src="/employer/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/employer/dist/js/adminlte.min.js"></script>


    <!-- Javascript files-->
    {{-- <script src="/bower_components/jquery/dist/jquery.min.js"></script> --}}
    <script src="/landingpage/js/jquery.cookie.js"> </script>
    <script src="/landingpage/js/ekko-lightbox.js"></script>
    <script src="/landingpage/js/jquery.simple-text-rotator.min.js"></script>
    <script src="/landingpage/js/jquery.scrollTo.min.js"></script>
    <script src="/landingpage/js/owl.carousel.min.js"></script>
    <script src="/landingpage/js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script src="/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    
    <script src="/bower_components/moment/min/moment.min.js"></script>
    <script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

    
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })
      $('#reservation').daterangepicker()
    
    })
  </script>
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
