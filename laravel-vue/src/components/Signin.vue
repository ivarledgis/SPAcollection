<template>
  <form>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" class="form-control" v-model="email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" v-model="password">
    </div>
    <button type="submit" class="btn btn-primary" @click.prevent="signin()">Signin</button>
  </form>
</template>
<script type="text/javascript">
import axios from 'axios'
export default {
  data() {
    return {
      email: '',
      password: '',
    }
  },
  methods: {
    signin() {
      axios.post('http://spawithlaravel.test:8080/api/signin', 
  		{ email: this.email, password: this.password },
  		{header: {'X-Requested-with': 'XMLHttpRequest'}})/*it lets laravel to know that we are sending the AJAX request so the validation we have in laravel controller works properly */
        .then(
          (response) => {
            const token = response.data.token;
            const base64Url = token.split('.')[1];
            const base64 = base64Url.replace('-','+').replace('_', '/');
            console.log(JSON.parse(window.atob(base64)));
            localStorage.setItem('token', token);
          }
        )
        .catch(
          (error) => console.log(error)
        )
    }
  }
}

</script>
