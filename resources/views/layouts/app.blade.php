<!DOCTYPE html>
<html lang="en">
<link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet">
    @include('includes.head')
    <body id="page-top">
        <!-- Navigation -->
        @include('includes.navbar')
        
        @yield('content')
        @include('includes.footer')
  </body>
</html>
