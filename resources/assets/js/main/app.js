require('./bootstrap');

import store from './store'

Vue.component('shopping-cart', require('./components/Cart'));
Vue.component('add-cart', require('./components/Cart/AddToCardWrapper'))

const app = new Vue({
  store,
  el: '#app'
});
