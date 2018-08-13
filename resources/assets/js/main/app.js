require('./bootstrap');

import store from './store'

Vue.component('shopping-cart', require('./components/Cart'));
Vue.component('add-cart', require('./components/Cart/AddToCardWrapper'))
Vue.component('cart-list', require('./components/Cart/Page'))
Vue.component('product-item', require('./components/Product'))

const app = new Vue({
  store,
  el: '#app'
});
