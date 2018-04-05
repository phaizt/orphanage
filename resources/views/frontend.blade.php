<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('wp-content/frontend/css/reset.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('wp-content/frontend/css/layout.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('wp-content/frontend/css/style.css') }}" type="text/css" media="all">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/jquery-1.6.js') }}"></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/cufon-yui.js') }}"></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/cufon-replace.js"') }}></script> 
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/Vegur_700.font.js') }}"></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/Vegur_400.font.js') }}"></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/Vegur_300.font.js') }}"></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/tms-0.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/tms_presets.js') }}"></script>
<script type="text/javascript" src="{{ asset('wp-content/frontend/js/backgroundPosition.js') }}"></script>
</head>
<body id="page1">
    <div id="app">
		<div class="body1">
			<div class="main">
		<!-- header -->
				<header>
					<div class="wrapper">
						<h1><a href="index.html" id="logo">Hope Center</a></h1>
						<nav>
							<ul id="top_nav">
								<li><a href="index.html"><img src="{{ asset('wp-content/frontend/images/top_icon1.gif') }}" alt=""></a></li>
								<li><a href="#"><img src="{{ asset('wp-content/frontend/images/top_icon2.gif') }}" alt=""></a></li>
								<li class="end"><a href="Contact.html"><img src="{{ asset('wp-content/frontend/images/top_icon3.gif') }}" alt=""></a></li>
							</ul>
						</nav>
						<nav>
							<ul id="menu">
								<li id="menu_active">
									<a href="index.html">@lang('menu_fe.home')</a>
								</li>
								<li>
									<a href="{{ url('#/mission') }}">
										@lang('menu_fe.mission')
									</a>
								</li>
								<li>
									<a href="News.html">@lang('menu_fe.about')</a>
								</li>
								<li>
									<a href="Help.html">@lang('menu_fe.help')</a>
								</li>
								<li>
									<a href="Contact.html">@lang('menu_fe.contact')</a>
								</li>
								<li>
									<a href="Contact.html">@lang('menu_fe.gallery')</a>
								</li>
							</ul>
						</nav>
					</div>
					@yield('slider')
				</header>
		<!-- / header -->
		<!-- content -->
			@yield('content')
		<!-- / content -->
		<!-- footer -->
				<footer>
					<div class="wrapper">
						<a href="index.html" id="footer_logo"><span>Hope</span>Center</a>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="{{ asset('wp-content/frontend/images/icon1.gif') }}" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="{{ asset('wp-content/frontend/images/icon2.gif') }}" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="{{ asset('wp-content/frontend/images/icon3.gif') }}" alt=""></a></li>
						</ul>
					</div>	
					<div class="wrapper">
						<nav>
							<ul id="footer_menu">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="Mission.html">Our Mission</a></li>
								<li><a href="News.html">News &amp; Press</a></li>
								<li><a href="Help.html">How to Help</a></li>
								<li class="end"><a href="Contact.html">Contact</a></li>
							</ul>
						</nav>
						<div class="tel"><span>+1 800</span>123 45 67</div>
					</div>
					<div id="footer_text">
						Website Template by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
						3D Models provided by <a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a>
					</div>
				</footer>
		<!-- / footer -->
			</div>
		</div>
	</div>
<script type="text/javascript">Cufon.now();</script>
<script>
$(window).load(function(){	
	$('.pagination li').hover(function(){
		if (!$(this).hasClass('current')) {
			$(this).find('a').stop().animate({backgroundPosition:'0 0'},600,'easeOutExpo', function(){$(this).parent().css({backgroundPosition:'-20px 0'})});
		}
	},function(){
		if (!$(this).hasClass('current')) {
			$(this).css({backgroundPosition:'0 0'}).find('a').stop().animate({backgroundPosition:'-250px 0'},600,'easeOutExpo');
		}
	})
})
</script>
@stack('appjs')
</body>
</html>