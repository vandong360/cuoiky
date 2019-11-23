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
<script src="https://kit.fontawesome.com/b1d9add112.js" crossorigin="anonymous"></script>
</head>
	
<body>
	<!-- header -->
    <div class="main">	
        <div class="agileits_web_banner_nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">                
                    <h1><a class="navbar-brand"><img src="{{ asset('images/logo.jpeg') }}" style="width: 12%;" alt=""></a></h1>	
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="{{ url('/') }}" >Trang chủ</a></li>
                            <li class="menu__item"><a href="#quan" class="menu__link scroll">Tìm Sân</a></li>
                            <li class="menu__item"><a href="{{ url('/blog') }}">Blog</a></li>
                            <li class="menu__item">   
                                    <a class="nav-link text-white" href="{{ asset('/logout') }}">Đăng Xuất&ensp;<i class="fas fa-sign-out-alt"></i></a>
                                
                            </li>
                        </ul>						
                    </nav>
                </div>
            </nav>
        </div>
    </div>
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

	<!-- stats -->
		{{-- @include('layouts.stats') --}}
	<!-- //stats -->

	<!-- Tin tuc --> 
		@include('layouts.tintuc')
	<!-- //Tin tuc -->

	<!-- Introduce -->
		@include('layouts.intro') <br> <br>
	<!-- //Introduce -->

	<!-- Bottom -->
		{{-- @include('layouts.bottom') --}}
	<!--//Bottom -->

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
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
 <!-- Custom-JavaScript-File-Links -->
        <script type="text/javascript" src="js/moment.js"></script>
        <script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
        <script type="text/javascript" src="js/timer.js"></script>
    <!-- //Custom-JavaScript-File-Links -->

<!-- requried-jsfiles-for owl -->
 <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
 <script src="js/index.js"></script>
<script src="js/scrolling-nav.js"></script>  

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/						
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>