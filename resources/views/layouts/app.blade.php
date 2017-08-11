<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   @include('partials.head')
</head>
<body >
    <div id="app">
       @include('partials.nav')

        @yield('content')
        @include('partials.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('applicant/js/app.js') }}"></script>
</body>
</html>
