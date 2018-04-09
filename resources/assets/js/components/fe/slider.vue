
<template>
	<div class="slider">
		<ul class="items">
			<li>
				<img src="/wp-content/frontend/images/img1.jpg" alt="">
				<div class="banner">
					<div class="wrapper"><span>“Our<em>Mission</em>is to<em>Help</em></span></div>
					<div class="wrapper"><strong>Those Who<em>Need</em>It”</strong></div>
				</div>
			</li>
			<li>
				<img src="/wp-content/frontend/images/img2.jpg" alt="">
				<div class="banner">
					<div class="wrapper"><span>“MAKE all the CHILDREN</span></div>
					<div class="wrapper"><strong>of the World HAPPY”</strong></div>
				</div>
			</li>
			<li>
				<img src="/wp-content/frontend/images/img3.jpg" alt="">
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
</template>
<script>
	export default {
		data() {
			return {
				users: []
			}
		}
	}

</script>