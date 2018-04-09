@extends('frontend')
@section('slider')
<article id="content">
    <transition>
      <router-view name="slider"></router-view>
    </transition>
</article>
@endsection
@section('content')
<router-view name="content"></router-view>
@endsection

@push('appjs')
<script type="text/javascript">
	$(window).load(function(){
		/*$('.pagination li').hover(function(){
			if (!$(this).hasClass('current')) {
				$(this).find('a').stop().animate({backgroundPosition:'0 0'},600,'easeOutExpo', function(){$(this).parent().css({backgroundPosition:'-20px 0'})});
			}
		},function(){
			if (!$(this).hasClass('current')) {
				$(this).css({backgroundPosition:'0 0'}).find('a').stop().animate({backgroundPosition:'-250px 0'},600,'easeOutExpo');
			}
		});*/
		/*$('.slider')._TMS({
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
		});*/
	});
</script>
@endpush