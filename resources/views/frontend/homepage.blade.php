@extends('frontend')
@section('slider')
<div class="slider">
	<ul class="items">
		<li>
			<img src="{{ asset('wp-content/frontend/images/img1.jpg') }}" alt="">
			<div class="banner">
				<div class="wrapper"><span>“Our<em>Mission</em>is to<em>Help</em></span></div>
				<div class="wrapper"><strong>Those Who<em>Need</em>It”</strong></div>
			</div>
		</li>
		<li>
			<img src="{{ asset('wp-content/frontend/images/img2.jpg') }}" alt="">
			<div class="banner">
				<div class="wrapper"><span>“MAKE all the CHILDREN</span></div>
				<div class="wrapper"><strong>of the World HAPPY”</strong></div>
			</div>
		</li>
		<li>
			<img src="{{ asset('wp-content/frontend/images/img3.jpg') }}" alt="">
			<div class="banner">
				<div class="wrapper"><span>“TOGETHER we can CHANGE</span></div>
				<div class="wrapper"><strong>Many Young LIVES”</strong></div>
			</div>
		</li>
	</ul>
	<ul class="pagination">
		<li id="banner1"><a href="#">Make<span>Donations</span></a></li>
		<li id="banner2"><a href="#">join<span>volunteer</span></a></li>
		<li id="banner3"><a href="#">Help<span>children</span></a></li>
	</ul>
</div>
@endsection
@section('content')
	<article id="content">
		<div class="wrapper">
			<div class="box1">
				<div class="line1"><div class="line2 wrapper">
					<section class="col1">
						<h2><strong>T</strong>rue<span>Story 1</span></h2>
						<div class="pad_bot1"><figure><img src="{{ asset('wp-content/frontend/images/page1_img1.jpg') }}" alt=""></figure></div>
						Hope Center is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website tem- plates</a> by TemplateMonster.com, opti- mized for 1024X768 res.
						<a href="#" class="button1">Read More</a>
					</section>
					<section class="col1 pad_left1">
						<h2 class="color2"><strong>T</strong>rue<span>Story 2</span></h2>
						<div class="pad_bot1"><figure><img src="{{ asset('wp-content/frontend/images/page1_img2.jpg') }}" alt=""></figure></div>
						This <a class="color0" href="http://blog.templatemonster.com/2011/07/18/free-website-template-charity-jquery-slider-typography/" target="_blank" rel="nofollow">Hope Center Template</a> goes with two packages – with PSD source files and without them.<a href="#" class="button1 color2">Read More</a>
					</section>
					<section class="col1 pad_left1">
						<h2 class="color3"><strong>T</strong>rue<span>Story 3</span></h2>
						<div class="pad_bot1"><figure><img src="{{ asset('wp-content/frontend/images/page1_img3.jpg') }}" alt=""></figure></div>
						This website template has several pages:<a href="index.html" class="link1">Home</a>,<a href="Mission.html" class="link1">Our Mission</a>,<a href="News.html" class="link1">News and Press</a>,<a href="Help.html" class="link1">How to Help</a>,<a href="Contact.html" class="link1">Contact Us</a>.<a href="#" class="button1 color3">Read More</a>
					</section>
				</div></div>
			</div>	
		</div>
		<div class="wrapper">
			<h3>Our Mission</h3>
			<p class="quot">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid- idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci- tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.<img src="{{ asset('wp-content/frontend/images/quot2.png') }}" alt="">
			</p>
		</div>
		<div class="wrapper">
			<div class="box2">
				<div class="line1"><div class="line2 wrapper">
					<section class="col1">
						<h4><span>June 31</span>2011</h4>
						<p class="pad_bot2"><strong>Ned ut perspiciatis unde omnis</strong></p>
						<p>Natus error sit voluptatem accusantium doloremque laudantium.</p>
						<a href="#" class="button2">Read More</a>
					</section>
					<section class="col1 pad_left1">
						<h4 class="color2"><span>June 29</span>2011</h4>
						<p class="pad_bot2"><strong>At veroeos et accusamus etiusto</strong></p>
						<p>Architecto beatae vitae dicta sunt explicabo emo enim ipsam.</p>
						<a href="#" class="button2 color2">Read More</a>
					</section>
					<section class="col1 pad_left1">
						<h4 class="color3"><span>June 17</span>2011</h4>
						<p class="pad_bot2"><strong>Temporibus quibusdam</strong></p>
						<p>Magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<a href="#" class="button2 color3">Read More</a>
					</section>
				</div></div>
			</div>
		</div>
	</article>
@endsection

@push('appjs')
<script type="text/javascript">
	$(window).load(function(){
		$('.slider')._TMS({
			preset:'zabor',
			easing:'easeOutQuad',
			duration:800,
			pagination:true,
			banners:true,
			waitBannerAnimation:false,
			slideshow:6000,
			bannerShow:function(banner){
				banner
					.css({right:'-700px'})
					.stop()
					.animate({right:'0'},600, 'easeOutExpo')
			},
			bannerHide:function(banner){
				banner
					.stop()
					.animate({right:'-700'},600,'easeOutExpo')
			}
		});
	});
</script>
@endpush