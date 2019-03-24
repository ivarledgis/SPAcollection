<template>
	<form @submit.prevent="onSubmitted()">
		<div class="form-group">
			<label for="content">Content</label>
			<input type="text" id="content" class="form-coontrol" v-model="quoteContent">
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>

</template>

<script type="text/javascript">
	import axios from 'axios'
	export default{
		data(){
			return{
				quoteContent: ''
			}
		},
		methods:{
			onSubmitted(){
				axios.post('http://spawithlaravel.test:8080/api/quote',
					{content: this.quoteContent})
				.then(
					(response) => console.log(response)
					)
				.catch(
					(error)=>console.log(error)
					)
			}
		}
	}

</script>