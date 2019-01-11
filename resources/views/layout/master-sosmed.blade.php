<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title') | IT Republic</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
       
    <link rel="stylesheet" href="{{ asset('public/themes/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/themes/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/themes/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/themes/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/themes/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('public/themes/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/themes/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/themes/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('public/themes/css/social-media.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">

    <script src="{{ asset('public/themes/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('public/themes/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/themes/js/easing.min.js') }}"></script>
    <script src="{{ asset('public/themes/js/hoverIntent.js') }}"></script>
    <script src="{{ asset('public/themes/js/superfish.min.js') }}"></script>	
    <script src="{{ asset('public/themes/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('public/themes/js/jquery.magnific-popup.min.js') }}"></script>	
    <script src="{{ asset('public/themes/js/owl.carousel.min.js') }}"></script>	
    <script src="{{ asset('public/themes/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('public/themes/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/themes/js/parallax.min.js') }}"></script>
    <script src="{{ asset('public/themes/js/mail-script.js') }}"></script>	
    <script src="{{ asset('public/themes/js/main.js') }}"></script>	
</head>
<body>
    @include('layout.header')

    @yield('content')
</body>
</html>