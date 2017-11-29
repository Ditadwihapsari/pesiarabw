<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pesiar.com</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Memorize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- custom-theme -->
<!--css links-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-->
<link href="css/font-awesome.css" rel="stylesheet"><!--font-awesome-->
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen"><!--Gallery-->
<link rel="stylesheet" type="text/css" href="css/style3.css" /><!--Banner Text-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /><!--Blog slider-->
<link href="css/mislider.css" rel="stylesheet" type="text/css" /><!--Testimonials-->
<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" /><!--Testimonials-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<link href="css/minified/style.min.css" rel="stylesheet" type="text/css" media="all" /><!--stylesheet-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<!--//css links-->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Courgette" rel="stylesheet" />
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" />

<!-- //Header -->

  <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/search/style.css" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- Header -->
<div id="home" class="banner w3l">
		<div class="header-nav">
		<div class="container">
			<nav class="navbar navbar-default">
					<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand" href="/pesiar/public">PESIAR</a>
								</h1>
					</div>
					<!-- navbar-header -->
					<div class="header-right-agileits">
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="guide">Become a Guide</a></li>
							<li><a href="#about">Sign in</a></li>
							<li><a href="#team">Help</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					</div>
				</nav>
							<div class="clearfix"> </div>
		</div>
		</div>

		@yield('isi')

<!-- //footer -->
<div class="copy footer">
	<div class="container">
		<p>© 2017 Memorize . All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			<ul class="agileits_social_list">
				<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
			</ul>
	</div>
</div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!--//js -->
<!-- OnScroll-Number-Increase-JavaScript -->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--Scrolling-top -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
<script>
$( function() {
	$( "#datepicker" ).datepicker();
} );
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--//Scrolling-top -->
<!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
<!-- PopUp-Box-JavaScript -->
		<script type="text/javascript">
			$(function() {
			$('.filtr-item a').Chocolat();
			});
		</script>
		<script src="js/mislider.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					stageHeight: 320,
					slidesOnStage: false,
					slidePosition: 'center',
					slideStart: 'mid',
					slideScaling: 150,
					offsetV: -5,
					centerV: true,
					navButtonsOpacity: 1,
				});
			});
		</script>
<!-- //testimonial-plugin -->
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider -->
<!-- bottom to top arrow -->
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
<!-- //bottom to top arrow -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>
