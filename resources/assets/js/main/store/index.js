import Vue from 'vue'
import Vuex from 'vuex'
import carts from './modules/carts'

// window.Vuex = Vuex
// window.Vue = Vue

Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    cart: carts
  }
})