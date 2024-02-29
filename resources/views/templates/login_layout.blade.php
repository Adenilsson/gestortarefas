<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" />
  
     <!-- Font Awesome -->
  </head>
  <body>
    
     @yield('content')
      
     <script src="{{asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>