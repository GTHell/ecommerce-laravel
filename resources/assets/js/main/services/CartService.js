import axios from './Api'

export default {
  getProduct (id) {
    return axios().get('/products/'+id)
  }
}