<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('partials.head')
</head>
<body >
    <div id="app">
       @include('partials.nav')
       @include('view_employer.partials.notification.areyousure')

        @yield('content')
        @include('partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('applicant/js/app.js') }}"></script>
    <script src="/dist/js/adminlte.min.js"></script>
	 <script src="/plugins/iCheck/icheck.min.js"></script>
   <script src="/employer/js/accept.js"></script>
</body>
</html>
