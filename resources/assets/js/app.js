
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

/*const app = new Vue({
    el: '#app'
});*/
import VueRouter from 'vue-router';
Vue.use(VueRouter);
// define routes for users
const routes = [
		{
		  path: '/',
		  name: 'homepage',
		  components: {
		  	slider : require('./components/fe/slider.vue'),
		  	content : require('./components/fe/index.vue'),
		  }
		},
		{
		  path: '/mission',
		  name: 'mission',
		  components: {
		  	content : require('./components/fe/mission.vue'),
		  }
		},
		{
		  path: '/aboutus',
		  name: 'aboutus',
		  components: {
		  	content : require('./components/fe/aboutus.vue')
		  }
		},
		{
		  path: '/help',
		  name: 'help',
		  components: {
		  	content : require('./components/fe/help.vue')
		  }
		},
		{
		  path: '/contact',
		  name: 'contact',
		  components: {
		  	content : require('./components/fe/contact.vue')
		  }
		},
		{
		  path: '/gallery',
		  name: 'gallery',
		  components: {
		  	content : require('./components/fe/gallery.vue')
		  }
		}
		];

const router = new VueRouter({ routes });
const app = new Vue({
  router
}).$mount('#app');
app.$forceUpdate();
Vue.config.devtools = true;