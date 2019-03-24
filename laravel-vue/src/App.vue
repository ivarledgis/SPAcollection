<template>
  <div id="app">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <router-link to="/">Quotes</router-link> |
          <router-link to="/new-quote">New Quote</router-link> |
          <router-link to="/signup">Signup</router-link> |
          <router-link to="/signin">Signin</router-link>

        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <router-view></router-view>
        </div>
      </div>
    </div>
  </div>  
</template>
<script>
export default {  
}
</script>
<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 30px;

}

</style>
