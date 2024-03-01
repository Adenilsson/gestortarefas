<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
     <!-- Font Awesome -->
  </head>
  <body>
    @include('nav')
    @yield('content')
    @include('footer')
      
     <script src="{{asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>