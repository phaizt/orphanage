@extends('frontend')
@section('content')
<!-- content -->
			<article id="content">
				<div class="wrapper">
					<div class="box1">
						<div class="line1"><div class="line2 wrapper">
							<section class="col1">
								<h2><strong>H</strong>ope</h2>
								<div class="pad_bot1"><figure><img src="{{ asset('wp-content/frontend/images/page2_img1.jpg')}}" alt=""></figure></div>
								Hope Center is one of
							</section>
							<section class="col1 pad_left1">
								<h2 class="color2"><strong>B</strong>elief</h2>
								<div class="pad_bot1"><figure><img src="{{ asset('wp-content/frontend/images/page2_img2.jpg')}}" alt=""></figure></div>
								This
							</section>
							<section class="col1 pad_left1">
								<h2 class="color3"><strong>H</strong>elp</h2>
								<div class="pad_bot1"><figure><img src="{{ asset('wp-content/frontend/images/page2_img3.jpg')}}" alt=""></figure></div>
								This website template has several pages
							</section>
						</div></div>
					</div>	
				</div>
				<div class="wrapper">
					<transition>
                      <router-view></router-view>
                    </transition>					
				</div>
				<div class="wrapper">
					<div class="box2">
						<div class="wrapper">
							<section class="col1">
								<ul class="list1">
									<li><a href="#">Sed ut perspiciatis unde omnis</a></li>
									<li class="color2"><a href="#">Iste natus error sit voluptatem accus</a></li>
									<li class="color3"><a href="#">Antium doloremque totam remiam</a></li>
								</ul>	
							</section>
							<section class="col1 pad_left1">
								<ul class="list1">
									<li><a href="#">Eaque ipsa quae ab illo inventore</a></li>
									<li class="color2"><a href="#">Veritatis et quasi architecto beatae</a></li>
									<li class="color3"><a href="#">Dicta sunt explicabo enim ipsam</a></li>
								</ul>
							</section>
							<section class="col1 pad_left1">
								<ul class="list1">
									<li><a href="#">Voluptatem quia voluptas sit</a></li>
									<li class="color2"><a href="#">Aspernatur aut odit aut fugit sed quia</a></li>
									<li class="color3"><a href="#">Consequuntur magni dolores eos</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</article>
<!-- / content -->
@endsection