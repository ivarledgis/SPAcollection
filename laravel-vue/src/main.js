// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'


import Quotes from './components/Quotes.vue'
import NewQuote from './components/NewQuote.vue'
import Signup from './components/Signup.vue'
import Signin from './components/Signin.vue'


Vue.use(VueRouter)
Vue.config.productionTip = false
const routes = [
{ 
	path:'',
	component: Quotes
},
{
	path:'/new-quote',
	component: NewQuote
},
{
	path:'/signup',
	component: Signup
},
{
	path:'/signin',
	component: Signin
}
];

const router = new VueRouter({
	mode: 'history',
	routes: routes
});


/* eslint-disable no-new */
new Vue({
  el: '#app',
  router: router,
  components: { App },
  template: '<App/>'
})
