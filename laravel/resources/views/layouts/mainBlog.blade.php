<!DOCTYPE html>
<html lang="en">
<head>
<title> @yield('head.title') </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script> -->

<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/JiSlider.css') }}" rel="stylesheet"> 
<!-- light-box -->
<link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
<!-- Owl-carousel-CSS -->
<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">

<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet"> 
<script src="https://kit.fontawesome.com/b1d9add112.js" crossorigin="anonymous"></script>
</head>
<body>  
    @include('layouts.header') 
   
    @yield('body.content')
    
    @include('layouts.footer')

</body> 
</html>

