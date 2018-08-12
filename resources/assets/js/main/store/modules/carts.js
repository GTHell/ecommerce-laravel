import CartAPI from '../../services/CartService'

let cart = window.localStorage.getItem('cart')
// let cartCount = window.localStorage.getItem('cartCount');

// state
const state = {
  carts: cart ? JSON.parse(cart) : []
}

// getters
const getters = {
  // items: state => state.items,
  carts: state => state.carts
}

// mutations
const mutations = {
  SAVE_CART: (state) => {
    window.localStorage.setItem('cart', JSON.stringify(state.carts));
    // console.log(JSON.parse(window.localStorage.getItem('cart')))
    // window.localStorage.setItem('cartCount', state.cartCount);
  },
  ADD_TO_CART: (state, payload) => {
    
    let item = _.find(state.carts, function (i) {
      return i.id === payload.id
    });
    
    if (item) {
      item.qty++;
      item.total_price += parseInt(item.unit_price)
    } else {
      let adjustItem = payload;
      // adjustItem.qty = 1;
      Vue.set(adjustItem, 'qty', 1);
      Vue.set(adjustItem, 'total_price', parseInt(adjustItem.unit_price))
      state.carts.push(adjustItem);
      // Vue.set(state.carts.item, state.carts.indexOf(item), adjustItem);
      
      // console.log('success')
    }
    // console.log(state.carts[0].total_price/100)
  },
  INCREMENT_TO_CART: (state, payload) => {
    // let item = _.find(state.carts, function(i){ return i.id === payload });
    let item = null;
    for (let i = 0; i < state.carts.length; i++) {
      if (state.carts[i].id === payload) {
        item = state.carts[i];
        break;
      }
    }
    
    item.qty++;
    
    console.log(item);
  },
  DECREMENT_TO_CART: (state, payload) => {
    let item = _.find(state.carts, function (i) {
      return i.id === payload
    });
    let index = state.carts.indexOf(item);
    
    item.qty--;
    
    if (item.qty < 1) {
      state.carts.splice(index, 1);
    }
  },
  DELETE_FROM_CART: (state, payload) => {
    let item = _.find(state.carts, function (i) {
      return i.id === payload
    });
    let index = state.carts.indexOf(item);
    state.carts.splice(state.carts.indexOf(item), 1);
  }
}

// actions
const actions = {
  async addToCart (context, payload) {
    const response = await CartAPI.getProduct(payload)
  
    context.commit('ADD_TO_CART', response.data)
    // console.log('commited ADD_TO_CART')
    context.commit('SAVE_CART', state.carts)
    // console.log('commited SAVE_CART')
  },
  incrementToCart: (context, payload) => {
    context.commit('INCREMENT_TO_CART', payload);
    context.commit('SAVE_CART', state.carts)
  },
  decrementToCart: (context, payload) => {
    context.commit('DECREMENT_TO_CART', payload);
    context.commit('SAVE_CART', state.carts)
  },
  deleteFromCart: (context, payload) => {
    context.commit('DELETE_FROM_CART', payload);
    context.commit('SAVE_CART', state.carts)
  }
}


export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}