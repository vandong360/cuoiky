<!DOCTYPE html>
<html lang="en">
<head>
<title>Trang chủ</title>
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
</head>
	
<body>

		
	<!-- header -->
		@include('layouts.header')
	<!-- header -->

	<div class="banner-silder" id="home">
	{{-- slide-content --}}
		@include('layouts.slide')
	{{-- end-slide-content --}}

	<!-- banner-bottom -->
		@include('layouts.banner-bottom')
	<!-- banner-bottom -->
	</div>


	<!-- about -->
		@include('layouts.about')
	<!-- //about -->

	<!-- Tin tuc --> 
		@include('layouts.tintuc')
	<!-- //Tin tuc -->

	<!-- Introduce -->
		@include('layouts.intro') <br> <br>
	<!-- //Introduce -->

	<!-- Footer Section -->
		@include('layouts.footer')
	<!-- /Footer Section -->

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: false}).addClass('ff')
			})
</script>

<!-- //footer -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>

	<script type="text/javascript" src="js/moment.js"></script>
	<script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
	<script type="text/javascript" src="js/timer.js"></script>

						
 	<script src="js/index.js"></script>
	<script src="js/scrolling-nav.js"></script>  

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>