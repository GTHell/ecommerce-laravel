require('./bootstrap');

import store from './store'

Vue.component('shopping-cart', require('./components/Cart'));
Vue.component('add-cart', require('./components/Cart/AddToCardWrapper'))
Vue.component('cart-list', require('./components/Cart/Page'))

const app = new Vue({
  store,
  el: '#app'
});
