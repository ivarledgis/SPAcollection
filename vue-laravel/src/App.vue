<template>
  <div id="app">
   <div class="container">
   	<div class="row">
   		<div class="col-xs-12">
   			<NewQuote></NewQuote>
   		</div>
   	</div>
   </div>
   
  </div>
</template>

<script>
	import NewQuote from './components/new-quotes.vue';
export default {
  name: 'App',
  data(){
  	return{

  	}  	
  },
  components: {
  		'app-new-quote' : NewQuote
  	}
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
