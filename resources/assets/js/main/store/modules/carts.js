import CartAPI from '../../services/CartService'

// state
const state = {
  carts: [],
}

// getters
const getters = {
  // items: state => state.items,
  carts: state => state.carts
}

// mutations
const mutations = {
  ADD_TO_CART: (state, payload) => {
    console.log(payload)
    return 0;
    
    let item = _.find(state.carts, function (i) {
      return i.id === payload.id
    });
    
    if (item) {
      item.qty++;
    } else {
      let adjustItem = payload;
      // adjustItem.qty = 1;
      Vue.set(adjustItem, 'qty', 1);
      state.carts.push(adjustItem);
      // Vue.set(state.carts.item, state.carts.indexOf(item), adjustItem);
    }
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
    
    console.log(response.data)
    
    context.commit('ADD_TO_CART', payload);
  },
  incrementToCart: (context, payload) => {
    context.commit('INCREMENT_TO_CART', payload);
  },
  decrementToCart: (context, payload) => {
    context.commit('DECREMENT_TO_CART', payload);
  },
  deleteFromCart: (context, payload) => {
    context.commit('DELETE_FROM_CART', payload);
  }
}


export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}