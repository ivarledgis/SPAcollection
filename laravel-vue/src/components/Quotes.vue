<template>
  <div>
    <button class="btn btn-primary" @click="onGetQuotes">Get Quotes</button> <hr>
        <app-quote v-for="quote in quotes" :qt="quote" @quoteDeleted="onQuoteDeleted($event)"></app-quote>
  </div>
</template>
<script type="text/javascript">
import axios from 'axios';
import Quote from './Quote.vue';
export default {
	components: {
    'app-quote': Quote
  },
  data () {
      return {
      quotes: []
    }
  },
  methods: {
    onGetQuotes () {
      axios.get('http://spawithlaravel.test:8080/api/quotes')
        .then(
        	response => {
          this.quotes = response.data.quotes;
        	}
        )
        .catch(
          error => console.log(error)
        )
    },
    onQuoteDeleted(id) {
      const position = this.quotes.findIndex((element) => {
        return element.id == id;
      });
      this.quotes.splice(position, 1);
    }
  }
}

</script>
