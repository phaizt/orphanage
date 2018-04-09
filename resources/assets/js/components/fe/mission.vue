<template>
	<div class="wrapper">
      <div class="box1">
        <div class="line1">
        	<div class="line2 wrapper">
	          <section class="col1">
	            <h2><strong>T</strong>rue<span>Story 1</span></h2>
	            <div class="pad_bot1">
	            	<figure>
	            		<img src="/wp-content/frontend/images/page2_img1.jpg" alt="">
	            	</figure>
	            </div>
	            Hope Center is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website tem- plates</a> by TemplateMonster.com, opti- mized for 1024X768 res.
	            <a href="#" class="button1">Read More</a>
	          </section>
        	</div>
    	</div>
      </div>  
    </div>
</template>

<script>
	export default {
	  data() {
	    return { activeItem: 'about' }
	  },
	  methods: {
	    isActive: function (menuItem) {
	      return this.activeItem === menuItem
	    },
	    setActive: function (menuItem) {
	    	console.log(menuItem);
	      //this.activeItem = menuItem // no need for Vue.set()
	    }
	  }
	}
</script>