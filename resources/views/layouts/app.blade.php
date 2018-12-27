<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome</title>
    <link href="{{asset('startbootstrap/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('startbootstrap/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('startbootstrap/css/grayscale.css')}}" rel="stylesheet">
  </head>
  <body id="page-top">
    @include('layouts.modales.modalLogin')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        @include('layouts.nav.navWelcome')
    </nav>
    <header class="masthead">
      @include('layouts.header.headerWelcome')
    </header>
    <div>
        @yield('content')
    </div>

    <script src="{{asset('startbootstrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('startbootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('startbootstrap/js/grayscale.min.js')}}"></script>
  </body>
</html>
