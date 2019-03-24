import Vue from 'vue'
import Router from 'vue-router'
import NewQuote from '../components/new-quotes.vue'

Vue.use(Router)

export default new Router({
  routes: [
  mode= 'history',
    {
    	path:'/',
    	name: 'newquotes',
    	component: NewQuote     
    }
  ]
})
